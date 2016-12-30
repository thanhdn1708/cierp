<?php 
class Migration_Create_Tabs extends CI_Migration {

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
      'module' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'controller' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'table' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'field' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
      ),
      'key' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'label' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      )
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('cierp_tab');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_tab');
  }

}