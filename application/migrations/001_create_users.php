<?php
class Migration_Create_users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),
			'gender' => array(
				'type' => 'INT',
				'constraint' => '2',
			),
			'birthday' => array(
				'type' => 'DATE',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('cierp_user');
	}

	public function down()
	{
		$this->dbforge->drop_table('cierp_user');
	}
}