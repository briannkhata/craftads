<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class referee extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Referees';
		$this->load->view($this->session->userdata('role').'/referees',$data);			
    }

   
    function get_data_from_post(){
        $data['referee']    = $this->input->post('referee');
        $data['user_id']    = $this->input->post('user_id');
    	return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_referee->get_referee_by_id($update_id);
		foreach ($query as $row) {
		    $data['referee']  = $row['referee'];
		    $data['user_id']  = $row['user_id'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('referee_id',$update_id);
			$this->db->update('referees',$data);
		 }else{
			$this->db->insert('referees',$data);
		}

		$this->session->set_flashdata('message','Referee saved successfully');
			if($update_id !=''):
    			redirect('referee');
			else:
				redirect('referee/read');
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

		$data['page_title']  = 'Create referee';
		$this->load->view($this->session->userdata('role').'/add_referee',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('referee_id',$param);
        $this->db->update('referees',$data);
    	$this->session->set_flashdata('message','Referee deleted successfully');
		redirect('referee');
	}

	
}