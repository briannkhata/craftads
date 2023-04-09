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
		$data['page_title']  = 'Previous Jobs / Referees';
		$this->load->view($this->session->userdata('role').'/referees',$data);			
    }

   
    function get_data_from_post(){
        $data['referee']    = $this->input->post('referee');
        $data['user_id']    = $this->input->post('user_id');
		$data['job']    = $this->input->post('job');

    	return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_referee->get_referee_by_id($update_id);
		foreach ($query as $row) {
		    $data['referee']  = $row['referee'];
		    $data['user_id']  = $row['user_id'];
			$data['job']  = $row['job'];

		}
		return $data;
	}

	function save() {
		$user_id = $this->input->post('user_id');
		$referees = $this->input->post('referee');
		$jobs = $this->input->post('job');
		$existingIds = $this->input->post('update_id');
	  
		$data = array();
		$updateIds = array();
	  
		// Prepare data for batch insert/update
		foreach ($referees as $i => $referee) {
		  if (!empty($referee) && !empty($jobs[$i])) {
			$row = array(
			  'referee' => $referee,
			  'job' => $jobs[$i],
			  'user_id' => $user_id
			);
	  
			if (isset($existingIds[$i])) {
			  // Existing record, mark for update
			  $updateIds[] = $existingIds[$i];
			  $row['referee_id'] = $existingIds[$i];
			}
	  
			$data[] = $row;
		  }
		}
	  
		// Batch insert new records
		$this->db->insert_batch('referees', $data);
	  
		// Batch update existing records
		if (!empty($updateIds)) {
		  $this->db->update_batch('referees', $data, 'referee_id');
		}
	  
		$this->session->set_flashdata('message', 'Referees saved successfully');
		redirect('referee');
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