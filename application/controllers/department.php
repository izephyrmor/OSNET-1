<?php
class Department extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }

  public function render_department_list() {
    if($this->session->userdata('logged_in') == 0)
        redirect('home/login');
    else {
      $this->load->model('department_model');

      $view_data['title'] = "Department List";
      $view_data['department_list'] = $this->department_model->getAllDepartment();

      $this->load->view("templates/header");
      $this->load->view("templates/nav-sidebar");
      $this->load->view("department/dept_list_view", $view_data);
      $this->load->view("templates/footer");
    }
  }
  
  public function department_list(){
    $this->load->view('department/list', $this->data);
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}