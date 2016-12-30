<?php
class Migration_Create_Categorys extends CI_Migration {

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
			'parentid' => array(
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
		$this->dbforge->create_table('cierp_category');
	}

	public function down()
	{
		$this->dbforge->drop_table('cierp_category');
	}
}