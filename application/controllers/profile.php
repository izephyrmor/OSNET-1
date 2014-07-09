<?php

class Profile extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('profile_m');
    }

    public function my_profile(){
        $this->load->view('profile/my-profile', $this->data);
    }
  
    public function modal(){
        $this->load->view('_layout_modal', $this->data);
    }
   
}