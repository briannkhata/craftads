<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_referee extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_referees(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('referee_id');
			$query = $this->db->get('referees');
			return $query->result_array();
		}

		function get_referee_by_id($referee_id){
		    $this->db->where('referee_id',$referee_id);
			$query = $this->db->get('referees');
			return $query->result_array();
		}

		function get_user_referees($user_id){
		    $this->db->where('user_id',$user_id);
		    $this->db->where('deleted',0);
			$query = $this->db->get('referees');
			return $query->result_array();
		}

		function get_referee($referee_id){
   		    $this->db->where('referee_id',$referee_id);
			$query = $this->db->get('referees')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['referee'];
				}
			}else {
				return '';
			}
			
		}


		function get_user_id($referee_id){
   		    $this->db->where('referee_id',$referee_id);
			$query = $this->db->get('referees')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['user_id'];
				}
			}else {
				return '';
			}
			
		}

		
	
}

