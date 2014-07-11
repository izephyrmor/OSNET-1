<?php
class Home extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    //$this->load->view("home");
    $this->render_team_list();
  }

  public function render_team_list() {
    $this->load->model("team_model");

    $team_list_view_data["title"] = "Home";
    $team_list_view_data["team_list"] = $this->team_model->getAllTeam();

    $this->load->view("templates/header");
    $this->load->view("templates/nav-sidebar");
    $this->load->view("team/team_list_view", $team_list_view_data);
    $this->load->view("templates/footer");
  }

  public function render_department_list() {
    $this->load->model('department_model');

    $view_data['department_list'] = $this->department_model->getAllDepartment();

    $this->load->view('department/list', $view_data);
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}