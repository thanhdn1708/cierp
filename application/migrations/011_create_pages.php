<?php
class Migration_Create_Pages extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'alias' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'body' => array(
				'type' => 'TEXT',
			),
			'default' => array(
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => TRUE,
			) 
			'templateid' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			),'visible' => array(
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => TRUE,
			) 
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('cierp_page');
	}

	public function down()
	{
		$this->dbforge->drop_table('cierp_page');
	}
}