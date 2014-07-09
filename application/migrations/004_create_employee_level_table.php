<?php

class Migration_Create_employee_level_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'user_level_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'type' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			)
		));

		$this->dbforge->add_key('user_level_id');
		$this->dbforge->create_table('os_user_level');
	}

	public function down()
	{
		$this->dbforge->drop_table('os_user_level');
	}
  
}