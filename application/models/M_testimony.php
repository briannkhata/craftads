<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_testimony extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_testimonies(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('testimony_id');
			$query = $this->db->get('testimonies');
			return $query->result_array();
		}

		function get_user_testimonies($user_id){
		    $this->db->where('deleted',0);
   		    $this->db->where('user_id',$user_id);
		    $this->db->order_by('testimony_id');
			$query = $this->db->get('testimonies');
			return $query->result_array();
		}

		function get_testimony_by_id($testimony_id){
		    $this->db->where('testimony_id',$testimony_id);
			$query = $this->db->get('testimonies');
			return $query->result_array();
		}

		function get_testimony($testimony_id){
   		    $this->db->where('testimony_id',$testimony_id);
			$query = $this->db->get('testimonies')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['testimony'];
				}
			}else {
				return '';
			}
			
		}

	
}

