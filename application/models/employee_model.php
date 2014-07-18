<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

  public function get_employee_profile($employee_id) {
    $employee_id = $this->db->escape_str($employee_id);
    $result = $this->db->get_where('user_information', array("user_id" => $employee_id));

    return $result->result();
  }
  
  public function get_employee_by_department($employee, $department) {
    $employee = $this->db->escape_str($employee);
    $department = $this->db->escape_str($department);

    $search_key = "%";
    $search_key .= $employee;
    $search_key .= "%";

    $query = null;

    if ($department !== "All") {
      $query = 
        "SELECT *
        FROM user_information
        WHERE department='$department' AND
        full_name LIKE '$search_key'";
    } else {
      $query = 
        "SELECT *
        FROM user_information
        WHERE full_name
        LIKE '$search_key'";
    }

    $result = $this->db->query($query);

    return $result->result();
  }

  public function getAllEmployee() {
    $query = 
      "SELECT *
      FROM user_information";

    $result = $this->db->query($query);

    return $result->result();
  }

  public function addNewEmployee(array $employee_information) {
    $si = array();

    foreach($employee_information as $key => $value) {
      $si[$key] = $this->db->escape_str($value);
    }

    $this->db->insert("user_information", $si);
  }
}