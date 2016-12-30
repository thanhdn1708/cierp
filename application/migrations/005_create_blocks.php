<?php 
class Migration_Create_Blocks extends CI_Migration {

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
      'label' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
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
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('cierp_block');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_block');
  }

}