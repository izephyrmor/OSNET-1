<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {
  function getAllEmployee() {
    $query = 
      "SELECT *
      FROM user_information";

    $result = $this->db->query($query);

    return $result->result();
  }

  function addNewEmployee(array $employee_information) {
    $si = array();

    foreach($employee_information as $key => $value) {
      $si[$key] = $this->db->escape_str($value);
    }

    $this->db->insert("user_information", $si);
  }
}