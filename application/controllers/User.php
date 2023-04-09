<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function dashboard(){
		$this->check_session();
		$data['page_title']  = 'Dashboard';
		$this->load->view($this->session->userdata('role').'/dashboard',$data);			
    }

    function email(){
		$this->check_session();
		$data['page_title']  = 'Send Email/s';
		$this->load->view($this->session->userdata('role').'/email',$data);			
    }

    function emails(){
		$this->check_session();
		$data['page_title']  = 'Email History';
		$this->load->view($this->session->userdata('role').'/emails',$data);			
    }

    function send_email(){
        
        foreach ($this->input->post('user_id') as $key => $value) {
       	
	        $config = array(
	        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	        'smtp_host' => 'ssl://smtp.craftads.net',
	        'smtp_port' => 25,
	        'smtp_user' => 'info@craftads.net',
	        'smtp_pass' => 'briani@@',
	        'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
	        'mailtype' => 'text', //plaintext 'text' mails or 'html'
	        'smtp_timeout' => '4', //in seconds
	        'charset' => 'iso-8859-1',
	        'wordwrap' => TRUE
	        );
	        
	        $this->load->library('email',$config);
	        //$this->email->initialize($config);
	        $from = 'info@craftads.net';
	        $to = $this->M_user->get_email($value);
	        $subject = $this->input->post('subject');
	        $email_body = $this->input->post('email_body');

	        $this->email->set_newline("\r\n");
	        $this->email->from($from);
	        $this->email->to($to);
	        $this->email->subject($subject);
	        $this->email->message($email_body);
	        $this->email->send();
	        //echo $this->email->print_debugger();
	        $dada['sender'] = $from;
	        $dada['receiver'] = $to;
   	        $dada['user_id'] = $value;
	        $dada['subject'] = $subject;
	        $dada['email_body'] = $email_body;
   	        $dada['date_sent'] = date('Y-m-d h:i:s');
	        $this->db->insert('emails',$dada);
	       }
	     $this->session->set_flashdata('message','Emails sent successfully');
		 redirect('user/emails');
    }

    function payments(){
		$this->check_session();
		$data['page_title']  = 'Payments';
		$this->load->view($this->session->userdata('role').'/payments',$data);			
    }

    function enquiries(){
		$this->check_session();
		$data['page_title']  = 'Enquiries';
		$this->load->view($this->session->userdata('role').'/enquiries',$data);			
    }

    function reviews(){
		$this->check_session();
		$data['page_title']  = 'Member Reviews';
		$this->load->view($this->session->userdata('role').'/reviews',$data);			
    }

    function settings(){
		$this->check_session();
		$data['page_title']  = 'Settings';
		$this->load->view($this->session->userdata('role').'/settings',$data);			
    }

    function members(){
		$this->check_session();
		$data['page_title']  = 'Members List';
		$this->load->view($this->session->userdata('role').'/members',$data);			
    }

    function admins(){
		$this->check_session();
		$data['page_title']  = 'Admins List';
		$this->load->view($this->session->userdata('role').'/admins',$data);			
    }

    function agents(){
		$this->check_session();
		$data['page_title']  = 'Members List';
		$this->load->view($this->session->userdata('role').'/agents',$data);			
    }

   function get_data_from_post(){
    	$duration = $this->db->get('settings')->row()->duration;
        $data['name']    = $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['gender']   = $this->input->post('gender');
        $data['phone']    = $this->input->post('phone');
        $data['alt_phone']    = $this->input->post('alt_phone');
        $data['alt_email']    = $this->input->post('alt_email');
        $data['location_id']    = $this->input->post('location_id');
        $data['country_id']    = $this->input->post('country_id');
        $data['username']    = $this->input->post('phone');
		$data['role']   = 'member';
		$data['address'] = $this->input->post('address');
    	$data['district_id']  = $this->input->post('district_id');
    	$data['profession']  = $this->input->post('profession');
    	$data['start_price']  = $this->input->post('start_price');
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

    function get_data_from_post2(){
        $data['name']    = $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['gender']   = $this->input->post('gender');
        $data['phone']    = $this->input->post('phone');
        $data['username']    = $this->input->post('username');

        $password    = $this->input->post('password');
        if (!empty($password)){
         $data['password']    = md5($password);
        }

        $data['role']    = $this->input->post('role');
        $data['added_by'] = $this->input->post('added_by');
        $data['address'] = $this->input->post('address');
		return $data;
    }

    function get_data_from_db2($update_id){
		$query = $this->M_user->get_user_by_id($update_id);
		foreach ($query as $row) {
		  $data['name']    = $row['name'];
	      $data['email']= $row['email'];
	      $data['gender']   = $row['gender'];
	      $data['phone']    = $row['phone'];
   	      $data['role']    = $row['role'];
	      $data['password']    = $row['password'];
	      $data['username']    = $row['username'];
	      $data['added_by']    = $row['added_by'];	
   	      $data['address']    = $row['address'];		

	  }
		return $data;
	}

    function get_data_from_db($update_id){
		$query = $this->M_user->get_user_by_id($update_id);
		foreach ($query as $row) {
		    $data['name']    = $row['name'];
	        $data['email']= $row['email'];
	        $data['gender']   = $row['gender'];
	        $data['phone']    = $row['phone'];
	        $data['alt_phone']    = $row['alt_phone'];
	        $data['alt_email']    = $row['alt_email'];
	        $data['location_id']    = $row['location_id'];
   	        $data['country_id']    = $row['country_id'];
	        $data['username']    = $row['phone'];
			$data['role']   = $row['role'];
			$data['address'] = $row['address'];
	    	$data['district_id']  = $row['district_id'];
	    	$data['profession']  = $row['profession'];
	    	$data['start_price']  = $row['start_price'];
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
    			redirect('user/members');
			else:
				redirect('user/read');
			endif;
	}

	function save2(){
		$data = $this->get_data_from_post2();
		$update_id = $this->input->post('update_id', TRUE);

		if (isset($update_id)){
			$this->db->where('user_id',$update_id);
			$this->db->update('users',$data);
		 }else{
			$this->db->insert('users',$data);
		}

		$this->session->set_flashdata('message','Admin/Agent saved successfully');
			if($update_id !=''):
    			redirect('user/admins');
			else:
				redirect('user/read2');
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

	function read2(){
		$update_id = $this->uri->segment(3);
		if(!isset($update_id)){
			$update_id = $this->input->post('update_id',$update_id);
		}
		if(is_numeric($update_id)){
			$data = $this->get_data_from_db2($update_id);
			$data['update_id'] = $update_id;
		}
		else{
			$data = $this->get_data_from_post2();
		}
	    $data['page_title']  = 'Create Admin/Agent';
		$this->load->view($this->session->userdata('role').'/add_admin',$data);	
	}

	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('user_id',$param);
        $this->db->update('users',$data);
    	$this->session->set_flashdata('message','Member Deleted successfully');
		redirect('user/members');
	}

	function delete2($param=''){
		$data['deleted'] = 1;
		$this->db->where('user_id',$param);
        $this->db->update('users',$data);
    	$this->session->set_flashdata('message','Admin/Agent deleted successfully');
		redirect('user/admins');
	}

	function view($param=''){
		$this->check_session();
		$data['page_title']  = 'Member Details';
		$data['user_id']  = $param;
		$this->load->view($this->session->userdata('role').'/view_member',$data);			
    }

    function views($param=''){
		$this->check_session();
		$data['page_title']  = 'Views';
		$data['user_id']  = $param;
		$this->load->view($this->session->userdata('role').'/views',$data);			
    }

    function profile(){
		$this->check_session();
		$data['page_title']  = 'My profile';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/profile',$data);			
    }


    function update_profile(){
		$user_id = $this->session->userdata('user_id');
        $data['name']    = $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['exact_location'] = $this->input->post('exact_location');
        $data["country"] = $this->input->post('country');
        $data["city"] = $this->input->post('city');
        $data["country_calling_code"] = $this->input->post('country_calling_code');
        $data['phone']    = $data["country_calling_code"].$this->input->post('phone');
        $data["country_code"] = $this->input->post('country_code');
        $data["region"] = $this->input->post('region');
        $data["region_code"] = $this->input->post('region_code');
		$data['address'] = $this->input->post('address');
		$data['details']      = $this->input->post('details');
		$data['purpose']      = $this->input->post('purpose');
		$data['twitter']       = $this->input->post('twitter');
		$data['facebook']    = $this->input->post('facebook');
        $data['instagram']      = $this->input->post('instagram');
		$data['linkedin']      = $this->input->post('linkedin');
        $data['tagline']      = $this->input->post('tagline');
        $data['start_price']      = $this->input->post('start_price');
		$data['category_id']      = $this->input->post('category_id');

		$trial = $this->M_user->get_trial($user_id);
		if(trial == 1){
			$data['trial'] = 1;
		}

		$this->db->where('user_id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Details updated successfully');
		redirect('User/profile');
	}

	function mylocation(){
		$this->check_session();
		$data['page_title']  = 'My Location';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/mylocation',$data);			
    }

	function update_location(){
		$user_id = $this->session->userdata('user_id');
		
        $data['exact_location'] = $this->input->post('exact_location');
        $data["country"] = $this->input->post('country');
        $data["city"] = $this->input->post('city');
        $data["country_calling_code"] = $this->input->post('country_calling_code');
        $data["country_code"] = $this->input->post('country_code');
        $data["region"] = $this->input->post('region');
        $data["region_code"] = $this->input->post('region_code');
		$data["address"] = $this->input->post('address');

		$trial = $this->M_user->get_trial($user_id);
		if(trial == 1){
			$data['trial'] = 1;
		}

		$this->db->where('user_id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Location updated successfully');
		redirect('User/mylocation');
	}


    function profile_picture(){
		$this->check_session();
		$data['page_title']  = 'Profile Picture';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/profile_picture',$data);			
    }

    function change_picture(){
		$this->check_session();
		 if (!empty($_FILES['photo']['name'])):
		   move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/users/'.$_FILES['photo']['name']);
	      $data['photo']   = $_FILES['photo']['name'];
	    endif;
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Photo updated successfully');
		redirect('user/profile_picture');
	}

	function change_password(){
		$this->check_session();
		$data['page_title']  = 'Change Password';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/change_password',$data);			
    }

    function change_password2(){
		$this->check_session();
		$data['password'] = md5($this->input->post('password'));
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Passoword updated successfully');
		redirect('user/profile_picture');
	}

    function add_images($param=''){
		$this->check_session();
		$data['page_title']  = 'Add Member Images |'.$this->M_user->get_user($param);
		$data['user_id']  = $param;
		$this->load->view($this->session->userdata('role').'/add_images',$data);			
    }

    // function activate_user($param=''){
	// 	$this->check_session();
	// 	$data['page_title']  = 'Activate Member |'.$this->M_user->get_user($param);
	// 	$data['user_id']  = $param;
	// 	$this->load->view($this->session->userdata('role').'/activate_user',$data);			
    // }

	function generateRandom(){
		$length = 10; // Change this to set the length of the random string
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$string = CRAFTADS - '';
		for ($i = 0; $i < $length; $i++) {
			$string .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $string;
	}
	
    function activate_account(){
		$this->check_session();
		$data['page_title']  = 'Activate Account |';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/activate_account',$data);			
    }

    function activate_account2(){
    	$duration = $this->db->get('settings')->row()->duration;
		$fee = $this->db->get('settings')->row()->fee;
		$data['deleted'] = 0;
		$data['payment_code'] = generateRandom();
		$data['payment_mode'] = $this->input->post('payment_mode');
		$data['amount'] = $fee;
		$data['date_joined'] = date('Y-m-d h:m:i');
		$data['expiry_date'] = date('Y-m-d', strtotime($data['date_joined']. ' + '.$duration.' months'));
		$this->db->where('user_id',$this->input->post('user_id'));
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Account Activated successfully');
		redirect('User/dashboard');
	}


	
    function buy_stars(){
		$this->check_session();
		$data['page_title']  = 'Buy Stars |';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/buy_stars',$data);			
    }

    function buy_stars2(){
		$stars = $this->db->get('settings')->row()->stars;
		$data['rating'] = 5;
		$data['rate_payment_code'] = generateRandom();
		$data['rate_payment_mode'] = $this->input->post('payment_mode');
		$data['rate_amount'] = $stars;
		$data['date_rated'] = date('Y-m-d h:m:i');
		$this->db->where('user_id',$this->input->post('user_id'));
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Stars bought successfully');
		redirect('User/dashboard');
	}


	function confirm_account(){
		$this->check_session();
		$data['page_title']  = 'Confirm Account |';
		$data['user_id']  = $this->session->userdata('user_id');
		$this->load->view($this->session->userdata('role').'/confirm_account',$data);			
    }

    function confirm_account2(){
		$confirm_fee = $this->db->get('settings')->row()->confirm_fee;
		$data['confirmed'] = 1;
		$data['confirmed_payment_code'] = generateRandom();
		$data['confirmed_payment_mode'] = $this->input->post('payment_mode');
		$data['confirmed_amount'] = $confirm_fee;
		$data['date_confirmed'] = date('Y-m-d h:m:i');
		$this->db->where('user_id',$this->input->post('user_id'));
		$this->db->update('users',$data);
		$this->session->set_flashdata('message','Account confirmed successfully');
		redirect('User/dashboard');
	}



function feature($param=''){
$data['featured'] = 1;
$this->db->where('user_id',$param);
$this->db->update('users',$data);
redirect('user/members');
}

function unfeature($param=''){
$data['featured'] = 0;
$this->db->where('user_id',$param);
$this->db->update('users',$data);
redirect('user/members');
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
redirect('user/view/'.$data['user_id']);
}

function delete_image(){
$image_id= $this->input->post('image_id');
unlink('uploads/users/'.$this->M_image->get_image($image_id));
$this->db->where('image_id',$image_id);
$this->db->delete('images');
return;
}



function save_settings(){
$data['app'] = $this->input->post('app');
$data['phone']= $this->input->post('phone');
$data['email'] = $this->input->post('email');
$data['address'] = $this->input->post('address');
$data['currency'] = $this->input->post('currency');
$data['about'] = $this->input->post('about');
$data['twitter'] = $this->input->post('twitter');
$data['facebook'] = $this->input->post('facebook');
$data['instagram'] = $this->input->post('instagram');

if (!empty($_FILES['image']['name'])):
move_uploaded_file($_FILES['image']['tmp_name'],'uploads/about/'.$_FILES['image']['name']);
$data['image'] = $_FILES['image']['name'];
endif;

$id = $this->input->post('id');
$this->db->where('id',$id);
$this->db->update('settings',$data);
$data['page_title'] = 'Settings |';
$this->load->view($this->session->userdata('role').'/settings',$data);
}

}