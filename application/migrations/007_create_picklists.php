<?php 
class Migration_Create_Picklists extends CI_Migration {

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
      'value' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
      ),      
      'label' => array(
        'type' => 'VARCHAR',
        'constraint' => 100,
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
      )   
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('cierp_picklist');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_picklist');
  }

}