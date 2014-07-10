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
}