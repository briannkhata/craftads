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

		function get_current_country(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['country_name'];
		}

		function get_current_region_code(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['region_code'];
		}

		function get_current_city(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['city'];
		}


		function get_current_country_calling_code(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['country_calling_code'];
		}

		function get_current_country_code(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['country_code'];
		}

		function get_current_region(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['region'];
		}

		function get_current_currency(){
			require_once APPPATH.'/../vendor/autoload.php';
			$client = new \GuzzleHttp\Client([
				'verify' => false
			 ]); 
			$response = $client->request('GET', 'https://ipapi.co/json/');
			$body = $response->getBody()->getContents();
			$data = json_decode($body,true);
			return $data['currency'];
		}
		
	
}