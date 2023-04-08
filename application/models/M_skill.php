<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_skill extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_skills(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('skill_id');
			$query = $this->db->get('skills');
			return $query->result_array();
		}

		function get_skill_by_id($skill_id){
		    $this->db->where('skill_id',$skill_id);
			$query = $this->db->get('skills');
			return $query->result_array();
		}

		function get_skill($skill_id){
   		    $this->db->where('skill_id',$skill_id);
			$query = $this->db->get('skill')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['skill'];
				}
			}else {
				return '';
			}
			
		}

}