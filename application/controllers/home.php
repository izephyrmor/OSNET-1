<?php
class Home extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  
  
   
  public function index(){
    $this->render_home();
  }

  public function render_home() {
	/*
		Branch: JEFFREY-announcements_table_db_change_07/11/2014
		Added:  data['announcement'], view('home', $this->data)
		*/
		
   $this->data['announcement'] = $this->announcement_m->get_announcement(); 
    $this->load->view("templates/header");
    $this->load->view("templates/nav-sidebar");
   
   $this->load->view('home', $this->data);

    $this->load->view("templates/footer");
  }

  public function render_team_list() {
    $this->load->model("team_model");

    $team_list_view_data["title"] = "Team List";
    $team_list_view_data["team_list"] = $this->team_model->getAllTeam();

    $this->load->view("templates/header");
    $this->load->view("templates/nav-sidebar");
    $this->load->view("team/team_list_view", $team_list_view_data);
    $this->load->view("templates/footer");
  }

  public function render_department_list() {

    $data['title'] = "Department List";
    
    $this->load->view("templates/header");
    $this->load->view("templates/nav-sidebar");
    $this->load->view("department/dept_list_view", $data);
    $this->load->view("templates/footer");
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}