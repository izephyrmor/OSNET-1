<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Announcement_m extends CI_Model {
		
		public $announcement_rules = array(
			'title' => array(
				'field' => 'announcement_title', 
				'label' => 'Title', 
				'rules' => 'trim|required|max_length[100]|xss_clean',
			), 
			'duration' => array(
				'field' => 'announcement_duration', 
				'label' => 'Duration', 
				'rules' => 'trim|required'
			),
			'details' => array(
				'field' => 'announcement_message', 
				'label' => 'Message', 
				'rules' => 'trim|required',
			)
		);
		
		public function array_from_post($fields){
			$data = array();
			foreach ($fields as $field){
				$data[$field] = $this->input->post($field);
			}
			return $data;
		}
	
		public function add_announcement(){
			$data = $this->array_from_post(array('title', 'duration', 'details'));
			$query = "INSERT INTO announcement (user_id, feature_id, feedback, title, duration, details) VALUES (0, 0, 'feedback', 'title', '10-10-2014', 'dsad')";

			$this->db->query($query);
		}

	}

