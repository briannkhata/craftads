<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function index(){
    	$data['page_title'] = 'Home';
		$this->load->view('index',$data);
    }

    function contact(){
        $data['page_title'] = 'Contact';
        $this->load->view('contact',$data);
    }

    function agents(){
        $data['page_title'] = 'Agents';
        $this->load->view('agents',$data);
    }

    // function locateme(){
    //     $response = file_get_contents('https://ipinfo.io/json/');
    //     $data = json_decode($response, true);
    //     $country = $data['country'];
    //     return $country;
       
    // }
    
     
    function app_downloads(){
        $data['date'] = date('Y-m-d h:m:i');
        $this->db->insert('app_downloads',$data);
        return;
    }


    function craftads(){
        $data['page_title'] = 'Craft Ads Listing';
        $data['country'] = $this->M_location->get_current_country();
        $data['region_code'] = $this->M_location->get_current_region_code();
        $data['city'] = $this->M_location->get_current_city();
        $this->load->view('craftads',$data);
    }

    function featured_craftads(){
        $data['page_title'] = 'Featured Craft Ads';
        $this->load->view('featured_craftads',$data);
    }

    function news(){
        $data['page_title'] = 'News List';
        $this->load->view('news',$data);
    }

    function news_detail($param=''){
        $data['page_title'] = 'News Detail';
        $data['news_id'] = $param;
        $this->load->view('news_detail',$data);
    }


    function plans(){
    	$data['page_title'] = 'Plans';
		$this->load->view('plans',$data);
    }

    function gallery(){
    	$data['page_title'] = 'Gallery';
		$this->load->view('gallery',$data);
    }

    function profile($param=''){
        $data['page_title']  = 'Member Details';
        $data['user_id']  = $param;
        $data['category_id']  = $this->M_user->get_category_id($param);
        $this->add_views($param);
        $this->load->view('profile',$data);          
    }

    function getCAT($category){
        echo json_encode($this->M_category->get_CAT($category));
    }

    function view_category($param=''){
        $data['page_title']  = $this->M_category->get_category($param).' members';

        $NEW['views']  = $this->M_category->get_views($param) + 1;
        $this->db->where('category_id',$param);
        $this->db->update('categories',$NEW);

        $data['category_id']  = $param;
        $this->load->view('view_category',$data);          
    }


    function about(){
        $data['page_title'] = 'About Us';
        $this->load->view('about',$data);
    }

    function join(){
        $data['page_title'] = 'Join Us';
        $this->load->view('join',$data);
    }

    function login(){
        $data['page_title'] = 'Login';
        $this->load->view('login',$data);
    }

    function terms(){
        $data['page_title'] = 'Terms & Conditions';
        $this->load->view('terms',$data);
    }

    function privacy(){
        $data['page_title'] = 'Privacy Policy';
        $this->load->view('privacy',$data);
    }

  

    function sendMaill(){
        
        $config = array(
        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
        'smtp_host' => 'ssl://smtp.craftads.net',
        'smtp_port' => 25,
        'smtp_user' => 'info@craftads.net',
        'smtp_pass' => 'briannkhatasmsmalawi',
        'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
        'mailtype' => 'text', //plaintext 'text' mails or 'html'
        'smtp_timeout' => '4', //in seconds
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
        );
        
        $this->load->library('email', $config);
        //$this->email->initialize($config);
        $from = $this->db->get('settings')->row()->sending_email;
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to('briannkhata@gmail.com');
        $this->email->subject('Testing..');
        $this->email->message('Hi this is testing for email sending');
        $this->email->send();
        //echo $this->email->print_debugger();
    }




    function save_enquiry(){
        $data['enquiry'] = $this->input->post('enquiry');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['phone']  = $this->input->post('phone');
        $data['enquiry_date']  = date('Y-m-d h:m:i');

        //$subject = "New Enquiry from website";

        //$message = "You have new Enquiry from website by ".$data['name'].' email '.$data['email'].' phone : '.$data['phone'].'  date '.$data['enquiry_date'].'The details are '.$data['enquiry'];

        //$to = $this->db->get('settings')->row()->sending_email;
        //$this->sendMail($message,$subject,$to);
        $this->db->insert('enquiries',$data);
        return;              
    }

    function add_views($user_id){
        $data['user_id'] = $user_id;
        //$to = $this->M_user->get_email($data['user_id']);
        $data['date'] = date('Y-m-d h:s:i');
        $data['ip'] = $_SERVER['REMOTE_ADDR'];
        //$this->sendMail($message,$subject,$to);
        $this->db->insert('views',$data);
        return;              
    }

    function add_review(){
        $data['review'] = $this->input->post('review');
        $data['user_id'] = $this->input->post('user_id');
        $data['name'] = $this->input->post('name');
        $data['review_date']  = date('Y-m-d h:m:i');
        $this->db->insert('reviews',$data);
        return;              
    }

    function comment(){
        $data['comment'] = $this->input->post('comment');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['news_id'] = $this->input->post('news_id');
        $data['date']  = date('Y-m-d h:m:i');
        $this->db->insert('news_comments',$data);
        return;              
    }

    function register(){       
        if (strlen($this->input->post('phone')) > 9) {
			$this->session->set_flashdata('message2','Invalid phone number - It should not be more than 9 characters');
			redirect('Home/join');
		} 

        $trial_duration = $this->db->get('settings')->row()->trial_duration;
        //$trial = $this->M_user->get_trial($user_id);
        
        $data['name'] = $this->input->post('name');
        $data['password'] = md5($this->input->post('password'));
        $data['role'] = 'member';
        $data['date_joined'] = date('Y-m-d h:i:s');
        $data['category_id'] = $this->input->post('category_id');
        $data['exact_location'] = $this->input->post('exact_location');
        
        $data['country'] = $this->M_location->get_current_country();
        $data['region_code'] = $this->M_location->get_current_region_code();
        $data['city'] = $this->M_location->get_current_city();
        $data["country_calling_code"] = $this->M_location->get_current_country_calling_code();
        $data["country_code"] = $this->M_location->get_current_country_code();
        $data["region"] = $this->M_location->get_current_region();
        $data["region_code"] = $this->M_location->get_current_region_code();
        
        $data['trial_end_date'] = date('Y-m-d', strtotime($data['date_joined'].' + '. $trial_duration . ' days'));
        $phone = $data["country_calling_code"].$this->input->post('phone');
        $check = $this->M_user->check_phone($phone);

        if($check == 1){
          $this->session->set_flashdata('message2','Phone  '.$phone.' Already exists! Choose Another one');
          redirect('Home/join');
        }else{
          $data['phone'] = $phone;
          $this->db->insert('users',$data);
          $this->session->set_flashdata('message','Account created successfully, please login to activate your account');
          redirect('Home/join');
        }
    }

    function refresh_members(){
    $keyword = $this->input->post('keyword');
    $category_id = $this->input->post('category_id');

    $exact_location = $this->input->post('exact_location');
    $country = $this->M_location->get_current_country();
    $region_code = $this->M_location->get_current_region_code();
    $city = $this->M_location->get_current_city();

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('role', 'member');
    $this->db->where('deleted', 0);
    $this->db->where('region_code', $region_code);
    $this->db->where('country', $country);
    $this->db->where('city', $city);

    if (!empty($keyword)) {
        $this->db->like('name', $keyword);
        $data['page_title'] = "Search Filter  : ". $keyword;
    }

    if (!empty($exact_location)) {
        $this->db->like('exact_location', $exact_location);
        $data['page_title'] = "Search Filter  : ". $exact_location ;
    }
    
    if (isset($category_id)) {
        $this->db->where('category_id', $category_id);
        $data['page_title'] = "Search Filter  : ". $this->M_category->get_category($category_id);
    }
    
    if (!empty($keyword) && isset($category_id)) {
        $this->db->like('name', $keyword);
        $this->db->where('category_id', $category_id);
        $data['page_title'] = "Search Filter  : ". $this->M_category->get_category($category_id).' | '. $keyword;
    }

    if (!empty($keyword) && !empty($exact_location)) {
        $this->db->like('name', $keyword);
        $this->db->or_like('exact_location', $exact_location);
        $data['page_title'] = "Search Filter  : ". $exact_location .' | '. $keyword;
    }

    if (isset($category_id) && !empty($exact_location)) {
        $this->db->where('category_id', $category_id);
        $this->db->like('exact_location', $exact_location);
        $data['page_title'] = "Search Filter  : ". $this->M_category->get_category($category_id).' | '.$exact_location;
    }

    if (isset($category_id) && !empty($exact_location) && !empty($keyword)) {
        $this->db->where('category_id', $category_id);
        $this->db->like('exact_location', $exact_location);
        $this->db->or_like('keyword', $keyword);
        $data['page_title'] = "Search Filter  : ". $this->M_category->get_category($category_id).' | '.$exact_location .' | '. $keyword;
    }

    $data['members'] = $this->db->get()->result_array();
    $this->load->view('refresh_members', $data);
    }
}