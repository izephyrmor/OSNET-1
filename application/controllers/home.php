<?php
class Home extends Admin_Controller {
  
	public function __construct() {
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('session');
	}
	
	/*
		Branch: MONIQUE-user_login_07/10/2014
		Created methods: index, login, login_validation, logout, home_page and sess_destroy
	*/
	
	
	public function index() {	
		if($this->session->userdata('logged_in') == 0)
			redirect('home/login');
		else redirect('home/home_page');
	}
	
	public function login(){
		if($this->session->userdata('logged_in') == 1)
			redirect('home/home_page');			
        else $this->load->view('user/login');
    }
	
	public function login_validation() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$result = $this->user_m->user_exists($username, md5($password));
		
		if(!$result) {
				
			$data['login_error_message'] = "Invalid username or password,<br> please log in again.";
			$this->session->set_userdata('logged_in', 0);
			
			$this->load->view('user/login', $data);
		}
		else {
			$this->session->set_userdata('logged_in', 1);
			redirect('home/home_page');
		}
	}
	
	public function logout() {
		$this->sess_destroy();
	}
	
	public function home_page() { 
		$this->load->view('home');
	}
	
	public function modal() {
		$this->load->view('_layout_modal');
	}
	
	private function sess_destroy() {
		$this->session->sess_destroy();
	}
}