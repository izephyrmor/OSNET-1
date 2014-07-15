<?php
class Home extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    $this->load->model('department_model');

    $view_data['department_list'] = $this->department_model->getAllDepartment();

    $this->load->view('department/list', $view_data);
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}