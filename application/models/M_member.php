<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_member extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_members(){
		    $this->db->where('deleted',0);
   		    $this->db->where('role','member');
		    $this->db->order_by('user_id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_member_by_id($user_id){
		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_name($member_id){
		    $this->db->where('deleted',0);
   		    $this->db->where('member_id',$member_id);
		    $this->db->order_by('member_id','DESC');
			$query = $this->db->get('members')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['name'];
				}
			}else {
				return '';
			}
			
		}

		function get_group_id($member_id){
   		    $this->db->where('member_id',$member_id);
			$query = $this->db->get('members')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['group_id'];
				}
			}else {
				return '';
			}
			
		}



}

