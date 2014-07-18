<?php
class Employee extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }

  public function render_employee_list() {
    if ($this->session->userdata('logged_in') == 0) {
      redirect("home/login");
    } else {
      $this->load->model("department_model");
      $this->load->model("employee_model");

      $employee_list_data["title"] = "Employee List";
      $employee_list_data["department_list"] = $this->department_model->getAllDepartment();
      $employee_list_data["employee_list"] = $this->employee_model->getAllEmployee();

      //print_r($this->employee_model->getAllEmployee());

      $this->load->view("templates/header");
      $this->load->view("templates/nav-sidebar");
      $this->load->view("employee/employee_list_view", $employee_list_data);
      $this->load->view("templates/footer");
    }
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