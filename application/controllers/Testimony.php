<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class testimony extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Testimonies';
		$this->load->view($this->session->userdata('role').'/testimonies',$data);			
    }

    function get_data_from_post(){
        $data['testimony']    = $this->input->post('testimony');
        $data['user_id']    = $this->input->post('user_id');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_testimony->get_testimony_by_id($update_id);
		foreach ($query as $row) {
		    $data['testimony']    = $row['testimony'];
   		    $data['user_id']    = $row['user_id'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('testimony_id',$update_id);
			$this->db->update('testimonies',$data);
		 }else{
			$this->db->insert('testimonies',$data);
		}

		$this->session->set_flashdata('message','Testimony saved successfully');
			if($update_id !=''):
    			redirect('testimony');
			else:
				redirect('testimony/read');
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

		$data['page_title']  = 'Create testimony';
		$this->load->view($this->session->userdata('role').'/add_testimony',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('testimony_id',$param);
        $this->db->update('testimonies',$data);
    	$this->session->set_flashdata('message','Testimony deleted successfully');
		redirect('testimony');
	}

}