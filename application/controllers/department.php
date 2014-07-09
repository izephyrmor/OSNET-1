<?php
class Department extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function department_list(){
    $this->load->view('department/list', $this->data);
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}