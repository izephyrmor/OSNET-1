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

  public function update_employee_profile(array $updated_employee_profile, $profile_id) {
    $secure_data = array();

    foreach($updated_employee_profile as $key => $value) {
      $secure_data[$key] = $this->db->escape_str($value);
    }

    $this->db->update("user_information", $updated_employee_profile, array("user_id" => $profile_id));
  }

  private function _createEmployeeLoginAccount() {
    $profile = $this->_getLatestEmployeeProfile();
    $profile_row = $profile[0];

    $data = array(
      "user_id" => $this->_getLatestEmployeeId(),
      "username" => strtolower($profile_row->first_name[0]). strtolower($profile_row->last_name),
      "password" => md5("1234")
    );

    $this->db->insert('user_login', $data);
  }

  private function _getLatestEmployeeProfile() {
    $query = 
      "SELECT *
      FROM user_information
      ORDER BY user_id
      DESC";

    $result = $this->db->query($query);

    return $result->result();
  }

  private function _getLatestEmployeeId() {
    $query = 
      "SELECT user_id
      FROM user_information
      ORDER BY user_id
      DESC
      LIMIT 1";

    $result = $this->db->query($query);

    return $result->row()->user_id;
  }

  public function addNewEmployee(array $employee_information) {
    //$si = array();

    foreach($employee_information as $key => $value) {
      $si[$key] = $this->db->escape_str($value);
    }

    // Create Employee Profile
    $this->db->insert("user_information", $si);

    // Create Employee Login Account for the newly created profile
    $this->_createEmployeeLoginAccount();
  }
}