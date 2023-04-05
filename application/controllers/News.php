<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class news extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'News List';
		$this->load->view($this->session->userdata('role').'/news',$data);			
    }

   
    function get_data_from_post(){
        $data['body']    = $this->input->post('body');
        $data['tags']    = $this->input->post('tags');
        $data['title']    = $this->input->post('title');
        $data['added_by']= $this->session->userdata('user_id');
        $data['date_added']   = date('Y-m-d h:i');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_news->get_news_by_id($update_id);
		foreach ($query as $row) {
		    $data['body']    = $row['body'];
		    $data['tags']    = $row['tags'];
		    $data['title']    = $row['title'];
        	$data['added_by']= $row['added_by'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);

		 if (!empty($_FILES['image']['name'])):
			move_uploaded_file($_FILES['image']['tmp_name'],'uploads/news/'.$_FILES['image']['name']);
	        $data['image']   = $_FILES['image']['name'];
	       endif;

		if (isset($update_id)){
			$this->db->where('news_id',$update_id);
			$this->db->update('news',$data);
		 }else{
			$this->db->insert('news',$data);
		}

		$this->session->set_flashdata('message','News saved successfully');
			if($update_id !=''):
    			redirect('news');
			else:
				redirect('news/read');
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

		$data['page_title']  = 'Create News';
		$this->load->view($this->session->userdata('role').'/add_news',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('news_id',$param);
        $this->db->update('news',$data);
    	$this->session->set_flashdata('message','News deleted successfully');
		redirect('news');
	}
	
}