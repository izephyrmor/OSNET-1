<?php
class Employee extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function employee_list(){
    $this->load->view('employee/list', $this->data);
  }
  
  public function employee_add(){
    $this->load->view('employee/form', $this->data);
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}