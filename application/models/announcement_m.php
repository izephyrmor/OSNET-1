<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Announcement_m extends CI_Model {
		
		/*
		Branch: JEFFREY-announcements_table_db_change_07/11/2014
		Added:  whole announcement_m.php
		*/
		
		public function save_announcement($title, $duration, $message){
			
			//if($id == NULL){
				//$data = $this->array_from_post(array('announcement_title', 'announcement_duration', 'announcement_message'));
				$data['announcement_title'] = $title;
				$data['announcement_duration'] = $duration;
				$data['announcement_message'] = $message;
				$data['user_id'] = 0;
				$data['feature_id'] = 0;
				$data['feedback'] = 'feedback';
				
				$this->db->insert('announcement', $data);
				$id = $this->db->insert_id();
			//}
			
		}
		 
		
		
		public function get_announcement($id = NULL){
			$this->db->select('announcement_id, announcement_title, announcement_duration, announcement_message');
			if($id !== NULL)
				$this->db->where('announcement_id', $id);
			$query = $this->db->get('announcement');
			return $query->result_array();
		}

	}

