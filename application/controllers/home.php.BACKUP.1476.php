<?php
class Home extends Admin_Controller{
  
  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
<<<<<<< HEAD
    //$view_data['department_list'] = $this->department_model->getAllDepartment();
	//$test = $this->announcement_m->add_new_announcement();

	$this->data['announcement'] = $this->announcement_m->get_announcement();
    $this->load->view('home', $this->data);
  
=======
    $this->render_home();
  }

  public function render_home() {
    $this->load->view("templates/header");
    $this->load->view("templates/nav-sidebar");
    //$this->load->view("");
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
    $this->load->model('department_model');

    $view_data['title'] = "Department List";
    $view_data['department_list'] = $this->department_model->getAllDepartment();

    $this->load->view("templates/header");
    $this->load->view("templates/nav-sidebar");
    $this->load->view("department/dept_list_view", $view_data);
    $this->load->view("templates/footer");
>>>>>>> 9e0d1f55876bbbfb9799c285b7703c227687a5ee
  }
  
  public function modal(){
    $this->load->view('_layout_modal', $this->data);
  }
  
}