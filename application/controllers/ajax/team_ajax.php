<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_ajax extends CI_Controller {

  public function ajaxAddNewTeam() {
    $department = $this->input->post("department");
    $team_leader = $this->input->post("team_leader");
    $team_name = $this->input->post("team_name");

    $this->load->model('department_model');
    $this->load->model('team_model');

    $department_id = $this->department_model->getDepartmentIdByName($department);

    $this->team_model->addNewTeam($department_id, 1, $team_name);
  }

}