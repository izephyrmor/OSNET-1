<?php

class Team extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('profile_m');
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