<?php 
class Migration_Create_Fields extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
        'tabid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
      ),
        'blockid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
      ),
      'label' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
      ),
      'fieldname' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),  
      'tablename' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),           
      'ui' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),
        'datatype' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),
      'mandatory' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),     
      'sequence' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),  
      'presence' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),       
      'visible' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),
    ));



    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('cierp_field');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_field');
  }

}