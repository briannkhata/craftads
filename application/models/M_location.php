<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_location extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_locations(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('location_id');
			$query = $this->db->get('locations');
			return $query->result_array();
		}

		function get_locations_nine(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('location_id','rand()');
		    $this->db->limit(9);
			$query = $this->db->get('locations');
			return $query->result_array();
		}

		function get_location_by_id($location_id){
		    $this->db->where('location_id',$location_id);
			$query = $this->db->get('locations');
			return $query->result_array();
		}

		function get_location($location_id){
   		    $this->db->where('location_id',$location_id);
			$query = $this->db->get('locations')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['location'];
				}
			}else {
				return '';
			}
			
		}

	
}

