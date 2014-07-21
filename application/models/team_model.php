<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model { 
  public function addNewTeam($dept_id, $tl, $tn) {
    $data = array(
      "team_name" => $this->db->escape_str($tn),
      "team_leader_id" => 1,//$this->db->escape_str($tl),
      "department_id" => $this->db->escape_str($dept_id),
      "active" => 1
    );

    $this->db->insert("team", $data);
  }

  public function getTeamNameById($team_id) {
    $query = 
      "SELECT * 
      FROM team
      WHERE team_id='$team_id'";

    $result = $this->db->query($query);

    return $result->row()->team_id;
  }

  public function getTeamRowById($team_id) {
    $query = 
      "SELECT *
      FROM team
      WHERE team_id='$team_id'";

    $result = $this->db->query($query);

    //print_r($result->result());

    return $result->result();
    /*
    $this->db->select("*");
    $this->db->from("team");
    $this->db->where("team_id", $team_id);

    $result = $this->db->get();

    if ($result->result() != NULL) {
      return $result->result();
    } else {
      return array("Message" => "Returned Nothing");
    } */
  }

  public function getAllTeam() {
    $query_string = 
      "SELECT *
      FROM team";

    $result = $this->db->query($query_string);

    return $result->result();
  }
}