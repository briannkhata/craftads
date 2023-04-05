<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_country extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_countries(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('country_id');
			$query = $this->db->get('countries');
			return $query->result_array();
		}

		function get_country_by_id($country_id){
		    $this->db->where('country_id',$country_id);
			$query = $this->db->get('countries');
			return $query->result_array();
		}

		function get_country($country_id){
   		    $this->db->where('country_id',$country_id);
			$query = $this->db->get('country')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['country'];
				}
			}else {
				return '';
			}
			
		}

}

