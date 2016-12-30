<?php 
class Migration_Create_Menus extends CI_Migration {

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
      'url' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
      ),
      'parentid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'null' => TRUE,
      ),     
      'sequence' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),        
      'visible' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),
      'label' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      )
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('cierp_menu');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_menu');
  }

}