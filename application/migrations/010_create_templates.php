<?php
class Migration_Create_Templates extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'templabel' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'layout' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'visible' => array(
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => TRUE,
			) 
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('cierp_template');
	}

	public function down()
	{
		$this->dbforge->drop_table('cierp_template');
	}
}