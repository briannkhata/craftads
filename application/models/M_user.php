<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

	    function get_members(){
		    $this->db->where('deleted',0);
   		    $this->db->where('role','member');
			$this->db->order_by('RAND()');
			$this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_emails(){
			$query = $this->db->get('emails');
			return $query->result_array();
		}

		function get_enquiries(){
			$query = $this->db->get('enquiries');
			return $query->result_array();
		}

		function get_unactivated_accounts(){
		    $this->db->where('deleted',1);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_user_members($added_by){
		    $this->db->where('added_by',$added_by);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_featured_members(){
		    //$this->db->where('deleted',0);
   		    $this->db->where('featured',1);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_featured_members_eight(){
		    //$this->db->where('deleted',0);
   		    $this->db->where('featured',1);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
		    $this->db->limit(8);
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_members_by_category($category_id){
		    //$this->db->where('deleted',0);
   		    $this->db->where('category_id',$category_id);
			$this->db->order_by('RAND()');
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		 function get_members2(){
		   // $this->db->where('deleted',0);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_user_by_id($user_id){
		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_user_reviews($user_id){
		    $this->db->where('user_id',$user_id);
		    $this->db->where('deleted',0);
		    $query = $this->db->get('reviews');
			return $query->result_array();
		}

		function get_views(){
		    $query = $this->db->get('views');
			return $query->result_array();
		}

		function get_user_review($user_id){
		    $this->db->where('user_id',$user_id);
		    $this->db->where('deleted',0);
   		    $this->db->order_by('review_id',rand());
   		    $this->db->limit(1);
		    $query = $this->db->get('reviews');
			return $query->result_array();
		}

		function get_user_views($user_id){
		    $this->db->where('user_id',$user_id);
   		    $this->db->order_by('view_id');
		    $query = $this->db->get('views');
			return $query->result_array();
		}

		function get_users_by_categorydd($category_id,$user_id){
		    $this->db->where('category_id',$category_id);
   		    $this->db->where('user_id !=',$user_id);
		    //$this->db->where('deleted',0);
   		    $this->db->where('role','member');
   		    $this->db->order_by('user_id');
		    $query = $this->db->get('users');
			return $query->result_array();
		}

		function get_users_by_category($category_id){
		    $this->db->where('category_id',$category_id);
		    $this->db->where('deleted',0);
   		    $this->db->where('role','member');
   		    $this->db->order_by('RAND()');
		    $query = $this->db->get('users');
			return $query->result_array();
		}

		function get_similar_members($category_id,$user_id){
		    $this->db->where('category_id',$category_id);
			$this->db->where('user_id !=',$user_id);
		    $this->db->where('deleted',0);
   		    $this->db->where('role','member');
   		    $this->db->order_by('RAND()');
		    $query = $this->db->get('users');
			return $query->result_array();
		}

		function get_latest_members_six(){
			$this->db->limit(6);
		    //$this->db->where('deleted',0);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

      	function get_admins(){
		    $this->db->where('user_id !=',$this->session->userdata('user_id'));
   		    $this->db->where('role','admin');
   		    $this->db->or_where('role','agent');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_agents(){
		    //$this->db->where('deleted',0);
   		    $this->db->where('role','agent');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_reviews(){
		    $this->db->order_by('review_date');
			$query = $this->db->get('reviews');
			return $query->result_array();
		}

		function check_phone($phone){
   		    $this->db->where('phone',$phone);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				return 1;
			}else {
				return 0;
			}
		}

		function get_trial($user_id){
			$this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['trial'];
				}
			}else {
				return '';
			}
		}

		function get_trial_end_date($user_id){
			$this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['trial_end_date'];
				}
			}else {
				return '';
			}
		}


		function get_user($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['name'];
				}
			}else {
				return '';
			}
			
		}

		function get_gender($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['gender'];
				}
			}else {
				return '';
			}
			
		}

		function get_category_id($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['category_id'];
				}
			}else {
				return '';
			}
			
		}

		function get_photo($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['photo'];
				}
			}else {
				return '';
			}
			
		}

		function get_phone($user_id){
			$this->db->where('user_id',$user_id);
		 $query = $this->db->get('users')->result_array();
		 if(count($query) > 0){
			 foreach ($query as $row) {
				 return $row['phone'];
			 }
		 }else {
			 return '';
		 }
		 
	 }

		function get_email($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['email'];
				}
			}else {
				return '';
			}
			
		}

		function get_profession($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['profession'];
				}
			}else {
				return '';
			}
			
		}

		function get_instagram($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['instagram'];
				}
			}else {
				return '';
			}
			
		}

		function get_facebook($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['facebook'];
				}
			}else {
				return '';
			}
			
		}

		function get_twitter($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['twitter'];
				}
			}else {
				return '';
			}
			
		}

		function get_youtube($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['youtube'];
				}
			}else {
				return '';
			}
			
		}

		function get_username($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['username'];
				}
			}else {
				return '';
			}
			
		}

		function get_deleted($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['deleted'];
				}
			}else {
				return '';
			}
			
		}
}