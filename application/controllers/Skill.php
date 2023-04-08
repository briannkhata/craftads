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
        $data['skill']    = $this->input->post('skill');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_Skill->get_Skill_by_id($update_id);
		foreach ($query as $row) {
		    $data['skill']  = $row['skill'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('skill_id',$update_id);
			$this->db->update('skills',$data);
		 }else{
			$this->db->insert('skills',$data);
		}

		$this->session->set_flashdata('message','Skill saved successfully');
			if($update_id !=''):
    			redirect('Skill');
			else:
				redirect('Skill/read');
			endif;
	}


	function add(){
		$data['page_title']  = 'Add Skill';
		$this->load->view($this->session->userdata('role').'/add_skill',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('skill_id',$param);
        $this->db->update('skills',$data);
    	$this->session->set_flashdata('message','Skill deleted successfully');
		redirect('Skill');
	}

	
}