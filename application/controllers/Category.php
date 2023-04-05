<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class category extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Categories';
		$this->load->view($this->session->userdata('role').'/categories',$data);			
    }

    function get_data_from_post(){
        $data['category']    = $this->input->post('category');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_category->get_category_by_id($update_id);
		foreach ($query as $row) {
		    $data['category']    = $row['category'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);

        if (!empty($_FILES['image']['name'])):
			move_uploaded_file($_FILES['image']['tmp_name'],'uploads/categories/'.$_FILES['image']['name']);
	        $data['image']   = $_FILES['image']['name'];
	       endif;

		if (isset($update_id)){
			$this->db->where('category_id',$update_id);
			$this->db->update('categories',$data);
		 }else{
			$this->db->insert('categories',$data);
		}

		$this->session->set_flashdata('message','Category saved successfully');
			if($update_id !=''):
    			redirect('category');
			else:
				redirect('category/read');
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

		$data['page_title']  = 'Create Category';
		$this->load->view($this->session->userdata('role').'/add_category',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('category_id',$param);
        $this->db->update('categories',$data);
    	$this->session->set_flashdata('message','Category deleted successfully');
		redirect('category');
	}

	function update_views(){
        $category_id = $this->input->post('category_id');
        $old = $this->M_category->get_views($category_id);
        $new['views'] = $old + 1;
        $this->db->where('category_id',$category_id);
        $this->db->insert('categories',$data);
        return;              
    }

}