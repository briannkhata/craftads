<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class payment_mode extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Payment Modes';
		$this->load->view($this->session->userdata('role').'/payment_modes',$data);			
    }

    function get_data_from_post(){
        $data['payment_mode']    = $this->input->post('payment_mode');
        $data['details']    = $this->input->post('details');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_payment_mode->get_payment_mode_by_id($update_id);
		foreach ($query as $row) {
		    $data['payment_mode']    = $row['payment_mode'];
   		    $data['details']    = $row['details'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('payment_mode_id',$update_id);
			$this->db->update('payment_modes',$data);
		 }else{
			$this->db->insert('payment_modes',$data);
		}

		$this->session->set_flashdata('message','Payment mode saved successfully');
			if($update_id !=''):
    			redirect('payment_mode');
			else:
				redirect('payment_mode/read');
			endif;
	}


	function read(){
		$update_id = $this->uri->segment(3);
		if(!isset($update_id)){
			$update_id = $this->input->post('update_id',$update_id);
		}
		if(is_numeric($update_id)){
			$data = $this->get_data_from_db($update_id);
			$data['update_id'] = $update_id;
		}
		else{
			$data = $this->get_data_from_post();
		}

		$data['page_title']  = 'Create Payment mode';
		$this->load->view($this->session->userdata('role').'/add_payment_mode',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('payment_mode_id',$param);
        $this->db->update('payment_modes',$data);
    	$this->session->set_flashdata('message','Pyment mode deleted successfully');
		redirect('payment_mode');
	}

}