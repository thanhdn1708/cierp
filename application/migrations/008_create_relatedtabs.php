<?php 
class Migration_Create_Relatedtabs extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'tabname' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
      ),
      'field' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
      ),      
      'relatedtab' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
      ),   
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('cierp_relatedtab');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_relatedtab');
  }

}