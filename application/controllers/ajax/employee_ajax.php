<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_ajax extends CI_Controller {
  
  public function ajax_add_new_employee() {
    $this->load->model("employee_model");

    $profile = $this->input->post("profile");

    $profile_data = json_decode($profile, true);

    unset($profile_data["add-new-employee"]);
    unset($profile_data[""]);
    unset($profile_data["search"]);

    $test = array("one" => 1, "two" => 2);

    //print_r($profile_data);

    $this->employee_model->addNewEmployee($profile_data);
  }
}