<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Announcement_ajax extends CI_Controller {

	public function view() {
		$this->load->model("announcement_m");
		$id=$_POST['row_id'];
		$try = $this->announcement_m->get_announcement($id);
		echo 
		'<h4 >' . $try[0]['announcement_title'] . '</h4>
		<i class="duration">' . $try[0]['announcement_duration'] . '</i>
		<div class="announcement">' . $try[0]['announcement_message'] . '</div>';
	}
	
	public function add(){
		$this->load->model("announcement_m");
		$title=$_POST['title'];
		$duration=$_POST['duration'];
		$message=$_POST['message'];
		$this->announcement_m->save_announcement($title, $duration, $message);
	
	}
   
}