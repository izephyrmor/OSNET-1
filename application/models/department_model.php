<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Department_model extends CI_Model {

    public function addNewOSDepartment($new_dept) {
      $new_department = $this->db->escape_str($new_dept);
      
      $query_string = 
        "INSERT INTO department (department_name)
        VALUES ('$new_department')";

      $result = $this->db->query($query_string);

      return $result;
    }

    public function searchDepartmentByName($department_name) {
      $dept_name = $this->db->escape_str($department_name);

      $search_key = "%";
      $search_key .= $dept_name;
      $search_key .= "%";

      $query_string = 
        "SELECT *
        FROM department
        WHERE department_name
        LIKE '$search_key'";

      $result = $this->db->query($query_string);

      return $result->result();
    }

    public function getAllDepartment() {
      $query_string = 
        "SELECT *
        FROM department";

      $result = $this->db->query($query_string);
      return $result->result();
    }
  }
?>