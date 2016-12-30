<?php
class Migration_Create_Articles extends CI_Migration {

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
			'categoryid' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			),
			'publishdate' => array(
				'type' => 'DATE',
			),
			'body' => array(
				'type' => 'TEXT',
			),
			'visible' => array(
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => TRUE,
			) 
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('cierp_article');
	}

	public function down()
	{
		$this->dbforge->drop_table('cierp_article');
	}
}