<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class image extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Images';
		$this->load->view($this->session->userdata('role').'/images',$data);			
    }

    function get_data_from_post(){
		$data['title'] = $this->input->post('title',TRUE);
		$data['user_id'] = $this->input->post('user_id',TRUE);
		$data['date_added'] = date('Y-m-d h:m:i');
		return $data;
	}

	function get_data_from_db($update_id){
		$query = $this->M_image->get_image_by_id($update_id);
		foreach ($query as $row) {
			$data['title'] = $row['title'];
			$data['user_id'] = $row['user_id'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		
        if (!empty($_FILES['image']['name'])):
			move_uploaded_file($_FILES['image']['tmp_name'],'uploads/gallery/'.$_FILES['image']['name']);
	        $data['image']   = $_FILES['image']['name'];
	       endif;

		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('image_id',$update_id);
			$this->db->update('images',$data);
		 }else{
			$this->db->insert('images',$data);
		}
		$this->session->set_flashdata('message','Image saved successfully');
			if($update_id !=''):
    			redirect('image');
			else:
				redirect('image/read');
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

		$data['page_title']  = 'Add images';
		$this->load->view($this->session->userdata('role').'/add_image',$data);			

	}

	function delete($param=''){
		unlink('./uploads/gallery/'.$this->M_image->get_image($param));
		$this->db->where('image_id',$param);
        $this->db->delete('images');
    	$this->session->set_flashdata('message','Image deleted successfully');
		redirect('image');
	}


}
