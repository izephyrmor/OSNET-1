<?php
class MY_Controller extends CI_Controller {

  public $data = array();
  
  function __construct(){
    parent::__construct();
    $this->data['errors'] = array();
    $this->data['site_name'] = config_item('site_name');
  }

}

require(APPPATH.'libraries/Admin_Controller.php');
require(APPPATH.'libraries/Frontend_Controller.php');