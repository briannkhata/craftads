<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Skill extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Skills';
		$this->load->view($this->session->userdata('role').'/skills',$data);			
    }

   
    function get_data_from_post(){
        $data['Skill']    = $this->input->post('Skill');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_Skill->get_Skill_by_id($update_id);
		foreach ($query as $row) {
		    $data['Skill']  = $row['Skill'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('Skill_id',$update_id);
			$this->db->update('Skills',$data);
		 }else{
			$this->db->insert('Skills',$data);
		}

		$this->session->set_flashdata('message','Skill saved successfully');
			if($update_id !=''):
    			redirect('Skill');
			else:
				redirect('Skill/read');
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

		$data['page_title']  = 'Create Skill';
		$this->load->view($this->session->userdata('role').'/add_Skill',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('Skill_id',$param);
        $this->db->update('Skills',$data);
    	$this->session->set_flashdata('message','Skill deleted successfully');
		redirect('Skill');
	}

	
}