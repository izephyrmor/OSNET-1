<?php

class Migration_Create_login_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'employee_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
        'null' => TRUE
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
        'null' => TRUE
			),
      'is_new' => array(
				'type' => 'INT',
				'constraint' => 11,
        'null' => TRUE
			),
      'last_login_time' => array(
				'type' => 'DATETIME',
        'null' => TRUE
			),
      'last_ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
        'null' => TRUE
			),
      
		));

		$this->dbforge->add_key('employee_id');
		$this->dbforge->create_table('os_login');
	}

	public function down()
	{
		$this->dbforge->drop_table('os_login');
	}
  
}