<?php

class Team extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('profile_m');
    }

    public function render_edit_team_member() {
      if ($this->session->userdata("logged_in") == 0) {
        redirect("home/login");
      } else {
        $this->load->model("team_model");

        $team_id = $this->input->get("team_id");
        //$team_name = $this->team_model->getTeamNameById($team_id);
        $team = $this->team_model->getTeamRowById($team_id);

        $edit_team_data["title"] = "Edit Team Members";
        $edit_team_data["team_id"] = $team_id;
        $edit_team_data["team"] = $team;
        $edit_team_data["team_department"] = $team->department_id;
  
        $this->load->view("templates/header");
        $this->load->view("templates/jquery-ui-header");
        $this->load->view("templates/nav-sidebar");
        $this->load->view("team/assign_team_member_view", $edit_team_data);
        $this->load->view("templates/footer");
      }
    }

    public function render_team_list() {
      if($this->session->userdata('logged_in') == 0)
        redirect('home/login');
      else {
        $this->load->model("team_model");
        $this->load->model("department_model");

        $team_list_view_data["title"] = "Team List";
        $team_list_view_data["team_list"] = $this->team_model->getAllTeam();
        $team_list_view_data["department_list"] = $this->department_model->getAllDepartment();

        $this->load->view("templates/header");
        $this->load->view("templates/jquery-ui-header");
        $this->load->view("templates/nav-sidebar");
        $this->load->view("team/team_list_view", $team_list_view_data);
        $this->load->view("templates/footer");
      }
    }

    public function my_profile(){
        $this->load->view('profile/my-profile', $this->data);
    }
  
    public function modal(){
        $this->load->view('_layout_modal', $this->data);
    }
   
}