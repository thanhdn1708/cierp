<?php 
class Migration_Create_Entity extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'entityid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
        'creatorid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
      ),
        'ownerid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
      ),
        'modifiedid' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
      ),        
      'setype' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'description' => array(
        'type' => 'text',
        'NULL' => TRUE
      ),
        'createdtime' => array(
        'type' => 'datetime',
      ),
        'modifiedtime' => array(
        'type' => 'datetime',
      ),
        'deleted' => array(
        'type' => 'INT',
        'constraint' => 2,
        'unsigned' => TRUE,
      ),
        'label' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
      ),
    ));



    $this->dbforge->add_key('entityid', TRUE);
    $this->dbforge->create_table('cierp_entity');
  }

  public function down()
  {
    $this->dbforge->drop_table('cierp_entity');
  }

}