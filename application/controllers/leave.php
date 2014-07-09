<?php
class Leave extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function leave_list(){
    $this->load->view('leave/list', $this->data);
  }
  
  public function leave_add(){
    $this->load->view('leave/form', $this->data);
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}