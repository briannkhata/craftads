<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'All Members';
		$this->load->view($this->session->userdata('role').'/members',$data);			
    }

	function dashboard(){
		$this->check_session();
		$data['page_title']  = 'Dashboard';
		$this->load->view($this->session->userdata('role').'/dashboard',$data);			
    }

    function view($param=''){
		$this->check_session();
		$data['page_title']  = 'Member Details';
		$data['user_id']  = $param;
		$this->load->view($this->session->userdata('role').'/view_member',$data);			
    }

     function add_images($param=''){
		$this->check_session();
		$data['page_title']  = 'Add Member Images |'.$this->M_user->get_user($param);
		$data['user_id']  = $param;
		$this->load->view($this->session->userdata('role').'/add_images',$data);			
    }

    function get_data_from_post(){
    	$duration = $this->db->get('settings')->row()->duration;
        $data['name']    = $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['gender']   = $this->input->post('gender');
        $data['phone']    = $this->input->post('phone');
        $data['alt_phone']    = $this->input->post('alt_phone');
        $data['alt_email']    = $this->input->post('alt_email');
        $data['location']    = $this->input->post('location');
        $data['username']    = $this->input->post('phone');
		$data['role']   = 'member';
		$data['address'] = $this->input->post('address');
    	$data['district']  = $this->input->post('district');
		$data['password']  = md5($data['phone']);
		$data['category_id']  = $this->input->post('category_id');
		$data['date_joined']  = $this->input->post('date_joined');
		$data['expiry_date']  = date('Y-m-d', strtotime($data['date_joined']. ' + '.$duration.' months'));
		$data['details']      = $this->input->post('details');
		$data['twitter']       = $this->input->post('twitter');
		$data['facebook']    = $this->input->post('facebook');
        $data['instagram']      = $this->input->post('instagram');
        $data['tagline']      = $this->input->post('tagline');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_member->get_member_by_id($update_id);
		foreach ($query as $row) {
		    $data['name']    = $row['name'];
	        $data['email']= $row['email'];
	        $data['gender']   = $row['gender'];
	        $data['phone']    = $row['phone'];
	        $data['alt_phone']    = $row['alt_phone'];
	        $data['alt_email']    = $row['alt_email'];
	        $data['location']    = $row['location'];
	        $data['username']    = $row['phone'];
			$data['role']   = $row['role'];
			$data['address'] = $row['address'];
	    	$data['district']  = $row['district'];
			$data['password']  = $data['phone'];
			$data['category_id']  = $row['category_id'];
			$data['date_joined']  = $row['date_joined'];
			$data['expiry_date']  = $row['expiry_date'];
			$data['details']      = $row['details'];
			$data['twitter']       = $row['twitter'];
			$data['facebook']    = $row['facebook'];
	        $data['instagram']      = $row['instagram'];
	        $data['tagline']      = $row['tagline'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);

		 if (!empty($_FILES['photo']['name'])):
			move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/users/'.$_FILES['photo']['name']);
	        $data['photo']   = $_FILES['photo']['name'];
	       endif;

		if (isset($update_id)){
			$this->db->where('user_id',$update_id);
			$this->db->update('users',$data);
		 }else{
			$this->db->insert('users',$data);
		}

		$this->session->set_flashdata('message','Member saved successfully');
			if($update_id !=''):
    			redirect('member');
			else:
				redirect('member/read');
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
	    $data['page_title']  = 'Create Member';
		$this->load->view($this->session->userdata('role').'/add_member',$data);	
	}

	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('member_id',$param);
        $this->db->update('members',$data);
    	$this->session->set_flashdata('message','Member Deleted successfully');
		redirect('member');
	}

	function activate($param=''){
		$data['deleted'] = 0;
		$this->db->where('member_id',$param);
        $this->db->update('members',$data);
    	$this->session->set_flashdata('message','Member activated successfully');
		redirect('member');
	}
 
	function save_images(){
		$data['user_id'] = $this->input->post('user_id');
		$data['date_added'] = date('Y-m-d h:i:s');
	    $folder = 'uploads/users/';
	    foreach ($_FILES['image']['tmp_name'] as $key => $image) {
	        $imageTmpName = $_FILES['image']['tmp_name'][$key];
	        $data['image'] = $_FILES['image']['name'][$key];
	        move_uploaded_file($imageTmpName,$folder.$data['image']);
	        $this->db->insert('images',$data);
	    }
	    $this->session->set_flashdata('message','Member Images saved successfully');
		redirect('member/view/'.$data['user_id']);	    
	}

	function delete_image(){
		$image_id= $this->input->post('image_id');
		unlink('uploads/users/'.$this->M_image->get_image($image_id));
		$this->db->where('image_id',$image_id);
        $this->db->delete('images');
    	return;
	}

}