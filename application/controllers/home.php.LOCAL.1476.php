<?php
class Home extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    //$view_data['department_list'] = $this->department_model->getAllDepartment();
	//$test = $this->announcement_m->add_new_announcement();

	$this->data['announcement'] = $this->announcement_m->get_announcement();
    $this->load->view('home', $this->data);
  
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}