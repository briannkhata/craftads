<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class country extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Countries';
		$this->load->view($this->session->userdata('role').'/countries',$data);			
    }

   
    function get_data_from_post(){
        $data['country']    = $this->input->post('country');
    	return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_country->get_country_by_id($update_id);
		foreach ($query as $row) {
		    $data['country']  = $row['country'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('country_id',$update_id);
			$this->db->update('countries',$data);
		 }else{
			$this->db->insert('countries',$data);
		}

		$this->session->set_flashdata('message','Country saved successfully');
			if($update_id !=''):
    			redirect('country');
			else:
				redirect('country/read');
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

		$data['page_title']  = 'Create country';
		$this->load->view($this->session->userdata('role').'/add_country',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('country_id',$param);
        $this->db->update('countries',$data);
    	$this->session->set_flashdata('message','Country deleted successfully');
		redirect('country');
	}

	
}