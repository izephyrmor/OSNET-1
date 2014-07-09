<?php

class Profile_m extends MY_Model{

  public $_table_name = 'os_employee';
  public $_primary_key = 'employee_id';
  public $_primary_filter = 'intval';
  public $_order_by = 'employee_id';
  public $rules = array();
  public $_timestamps = FALSE;

}