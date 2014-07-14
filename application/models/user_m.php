<?php
class User_M extends MY_Model
{
	
	protected $_table_name = 'os_login';
	protected $_order_by = 'username';
	public $rules = array(
		'username' => array(
			'field' => 'username', 
			'label' => 'username', 
			'rules' => 'trim|required|valid_username|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	function __construct () {
		parent::__construct();
	}
	
	
	/*
		Branch: MONIQUE-user_login_07/10/2014
		Created method: user_exists
	*/
	
	function user_exists($username, $password) {
	
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		
		if($query->result() != NULL) return TRUE;
		else return FALSE;
	
	}
	
	
	function get_features() {
		$this->db->select('feature_name');
		$this->db->from('feature');
		$this->db->join('feature_role', 'feature.feature_id = feature_role.feature_id');
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function get_user_id($username) {
		$this->db->select('user_id');
		$this->db->from('user_login');
		$this->db->where('username', $username);
		$query = $this->db->get();
		
		return $query->result();
		
	}
	
	function get_feature_id($feature_name) {
		$this->db->select('feature_id');
		$this->db->from('feature');
		$this->db->where('feature_name', $feature_name);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function insert_feedback($data) {
		$result = $this->get_user_id($data['username']);
		
		foreach($result as $r)
			$user_id = $r->user_id;
		
		$result = $this->get_feature_id($data['feature_name']);

		foreach($result as $r)
			$feature_id = $r->feature_id;
		
		$newdata = array(
			'user_id' => $user_id,
			'feature_id' => $feature_id,
			'subject' => $data['subject'],
			'text' => $data['text'],
			'date_created' => $data['date_created'],
			'status' => $data['status']
		);
		
		$this->db->insert('feedback', $newdata);
		
	}
}