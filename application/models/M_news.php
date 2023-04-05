<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_news(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('news_id');
			$query = $this->db->get('news');
			return $query->result_array();
		}

		function get_news_three(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('news_id');
		    $this->db->limit(3);
			$query = $this->db->get('news');
			return $query->result_array();
		}

		function get_news_by_id($news_id){
		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news');
			return $query->result_array();
		}

		function get_body($news_id){
   		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['body'];
				}
			}else {
				return '';
			}
			
		}

		function get_date_added($news_id){
   		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['date_added'];
				}
			}else {
				return '';
			}
			
		}

		function get_tags($news_id){
   		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['tags'];
				}
			}else {
				return '';
			}
			
		}

		function get_title($news_id){
   		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['title'];
				}
			}else {
				return '';
			}
			
		}

		function get_image($news_id){
   		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['image'];
				}
			}else {
				return '';
			}
			
		}

		function get_added_by($news_id){
   		    $this->db->where('news_id',$news_id);
			$query = $this->db->get('news')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['added_by'];
				}
			}else {
				return '';
			}
			
		}

	
}

