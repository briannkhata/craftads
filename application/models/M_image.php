<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_image extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_images(){
		    //$this->db->where('deleted',0);
		    $this->db->order_by('image_id','DESC');
			$query = $this->db->get('images');
			return $query->result_array();
		}

		function get_image_by_id($image_id){
		    $this->db->where('image_id',$image_id);
			$query = $this->db->get('images');
			return $query->result_array();
		}

		function get_user_images($user_id){
		    $this->db->where('user_id',$user_id);
			$this->db->order_by('image_id','random()');
			$query = $this->db->get('images');
			return $query->result_array();
		}

		function get_image($image_id){
		    $this->db->where('image_id',$image_id);
			$query = $this->db->get('images');
			return $query->row()->image;
		}

		function get_imageRANDOM(){
		    $this->db->order_by('image_id','random()');
  		    $this->db->limit('1');
			$query = $this->db->get('images');
			return $query->row()->image;
		}

		 function get_views(){
			$query = $this->db->get('views');
			return $query->result_array();
		}




		
}