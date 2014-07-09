<?php
class MY_Model extends CI_Model {

  protected $_table_name = '';
  protected $_primary_key = '';
  protected $_primary_filter = 'intval';
  protected $_order_by = '';
  protected $_timestamps = FALSE;
  public $_rules = array();
  
  function __construct(){
    parent::__construct();

  }
  public function get($id = NULL, $single = FALSE){
		
		if ($id != NULL) { //If we have an ID
			$filter = $this->_primary_filter; //We filter it
			$id = $filter($id); //We filter it
			$this->db->where($this->_primary_key, $id); //We do a WHERE statement on the id
			$method = 'row'; //We return a row
		}
		elseif($single == TRUE) { //If we pass a single parameter
			$method = 'row'; // We get a row
		}
		else {
			$method = 'result'; //We get an array of rows
		}
		
		if (!count($this->db->ar_orderby)) { //If ORDER BY is not set, we set it here
			$this->db->order_by($this->_order_by);
		}
		return $this->db->get($this->_table_name)->$method(); // Return the result of our query
	}
  
  public function get_by($where, $single = FALSE){
		$this->db->where($where); //add where statement
		return $this->get(NULL, $single); //Return the original get statement
	}
	
	public function save($data, $id = NULL){ //If passing an id, it will be an update. If no id, it will be an insert
		
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}
		
		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}
		
		return $id;
	}
	
	public function delete($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);
		
		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}

}