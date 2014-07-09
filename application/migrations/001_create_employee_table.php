<?php

class Migration_Create_employee_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'employee_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'department_id' => array(
				'type' => 'INT',
				'constraint' => 5,
        'null' => TRUE
			),
			'employee_level_id' => array(
				'type' => 'INT',
				'constraint' => 5,
        'null' => TRUE
			),
      'lastname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'firstname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'middlename' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'name_suffix' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
        'null' => TRUE
			),
      'gender' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
        'null' => TRUE
			),
      'nickname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
        'null' => TRUE
			),
      'facebook' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'position' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'employee_number' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'office' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'sss' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'tin' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'phic' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'hdmf' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'tax_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'marital_status' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'spouse_lastname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'spouse_firstname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'spouse_middlename' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'spouse_name_suffix' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'local_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'registered_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'birthdate' => array(
				'type' => 'DATETIME',
        'null' => TRUE
			),
      'training_date' => array(
				'type' => 'DATETIME',
        'null' => TRUE
			),
      'starting_date' => array(
				'type' => 'DATETIME',
        'null' => TRUE
			),
      'notes' => array(
				'type' => 'VARCHAR',
				'constraint' => '500',
        'null' => TRUE
			),
      'bank_account' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'remaining_leave' => array(
				'type' => 'INT',
				'constraint' => 5,
        'null' => TRUE
			),
      'registered_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'previous_employer' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'previous_employer_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
        'null' => TRUE
			),
      'date_created' => array(
				'type' => 'DATETIME',
        'null' => TRUE
			),
      'date_archived' => array(
				'type' => 'DATETIME',
        'null' => TRUE
			),
      
		));

		$this->dbforge->add_key('employee_id');
		$this->dbforge->create_table('os_employee');
	}

	public function down()
	{
		$this->dbforge->drop_table('os_employee');
	}
  
}