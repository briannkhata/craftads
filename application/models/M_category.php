<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_category extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_categories(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('category_id');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		function get_CAT($category){
		    $this->db->where('deleted',0);
			$this->db->like('category',$category);
		    $this->db->order_by('category');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		function get_category_by_id($category_id){
		    $this->db->where('category_id',$category_id);
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		function get_category($category_id){
   		    $this->db->where('category_id',$category_id);
			$query = $this->db->get('categories')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['category'];
				}
			}else {
				return '';
			}
			
		}

		function get_views($category_id){
   		    $this->db->where('category_id',$category_id);
			$query = $this->db->get('categories')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['views'];
				}
			}else {
				return '';
			}
			
		}

	
}