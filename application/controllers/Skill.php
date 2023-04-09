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
		$query = $this->M_skill->get_Skill_by_id($update_id);
		foreach ($query as $row) {
		    $data['skill']  = $row['skill'];
		}
		return $data;
	}

    function save(){
        $user_id = $this->input->post('user_id');
        $skills = $this->input->post('skill');
    
        if (!empty($skills)) {
            $data = array();
            foreach ($skills as $skill) {
                $data[] = array(
                    'skill' => $this->db->escape_str($skill),
                    'user_id' => $user_id
                );
            }
    
            $update_id = $this->input->post('update_id');
            if (isset($update_id)){
                // get existing skill_ids from the database
                $existing_skill_ids = $this->db->select('skill_id')->from('skills')->where('user_id', $user_id)->get()->result_array();
                // loop through each row of data and add the corresponding skill_id
                foreach ($data as &$row) {
                    $skill_id = null;
                    foreach ($existing_skill_ids as $existing_skill) {
                        if ($existing_skill['skill_id'] == $update_id) {
                            $skill_id = $update_id;
                            break;
                        }
                    }
                    $row['skill_id'] = $skill_id;
                }
                $this->db->where('skill_id', $update_id);
                if ($this->db->update_batch('skills',$data,'skill_id')) {
                    $this->session->set_flashdata('message','Skills updated successfully');
                    redirect('Skill');
                }
            } else {
                if ($this->db->insert_batch('skills', $data)) {
                    $this->session->set_flashdata('message','Skills saved successfully');
                    redirect('Skill');
                }
            }
        }
    }

	function add(){
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