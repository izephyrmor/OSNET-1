<?php
class User extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function login(){
    	$rules = $this->user_m->rules;
    	$this->form_validation->set_rules($rules);
    	if ($this->form_validation->run() == TRUE) {
    		// We can login and redirect
    	}
		
        $this->data['form_attributes'] = array('class' => 'login-form col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center', 'role' => 'form');
        $this->load->view('user/login', $this->data);
    }

}