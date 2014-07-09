<?php

class Migration_Create_department_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'department_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			)
		));

		$this->dbforge->add_key('department_id');
		$this->dbforge->create_table('os_department');
	}

	public function down()
	{
		$this->dbforge->drop_table('os_department');
	}
  
}