<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();	 
    } 

    function index(){
    	$data['page_title'] = 'Login';
		$this->load->view('login',$data);
    }

	function signin(){   
		$phone = $this->input->post('phone');
		$password = md5($this->input->post('password'));			  
		$user = $this->db->query("SELECT * FROM users WHERE phone ='$phone' AND password ='$password'");
		$row = $user->row();
		if (isset($row)){
			$name		=	$row->name;
			$user_id	=	$row->user_id;
			$role		=	$row->role;
			$this->session->set_userdata('user_login', '1');
			$this->session->set_userdata('user_id',$user_id);
			$this->session->set_userdata('role',$role);
			$this->session->set_userdata('name',$name);
			redirect(base_url().'User/dashboard');
		}
										   
		$data['page_title'] = 'Login';
		$this->session->set_flashdata('message','Invalid Username or Password');
		//$this->load->view('login',$data);
		redirect('Home/login');
	}

    function logout(){
		session_destroy();
		redirect(base_url());
    }

}