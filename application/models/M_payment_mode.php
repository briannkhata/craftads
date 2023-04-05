<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_payment_mode extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_payment_modes(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('payment_mode_id');
			$query = $this->db->get('payment_modes');
			return $query->result_array();
		}


		function get_payment_mode_by_id($payment_mode_id){
		    $this->db->where('payment_mode_id',$payment_mode_id);
			$query = $this->db->get('payment_modes');
			return $query->result_array();
		}

		function get_payment_mode($payment_mode_id){
   		    $this->db->where('payment_mode_id',$payment_mode_id);
			$query = $this->db->get('payment_modes')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['payment_mode'];
				}
			}else {
				return '';
			}
			
		}

		function get_details($payment_mode_id){
   		    $this->db->where('payment_mode_id',$payment_mode_id);
			$query = $this->db->get('payment_modes')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['details'];
				}
			}else {
				return '';
			}
			
		}

	
}

