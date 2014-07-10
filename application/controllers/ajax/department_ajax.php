<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_ajax extends CI_Controller {

  public function addDepartment() {
    $dept = $this->input->post("new_dept");

    $this->load->model("department_model");

    echo $this->department_model->addNewOSDepartment($dept);
  }

  public function search_department() {
    $search_key = $this->input->post("key");

    $this->load->model("department_model");

    $search_results = $this->department_model->searchDepartmentByName($search_key);

    foreach($search_results as $key) {
      echo "<tr>";
        echo "<td>". $key->department_name ."</td>";
        echo "<td> </td>";
        echo "<td> </td>";
        echo "<td> </td>";
      echo "</tr>";
    }
  }

}