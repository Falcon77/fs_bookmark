<?php

class Setup_model extends CI_Model 
{

    public function __construct() {}
    
    public function createDatabaseSchema() 
    {
        $this->load->dbforge();
        
        $result = 0;
        $result += $this->_createDatabaseUserTable();
        //$this->_createDatabaseOtherTable();
        
        return $result;
    }
    
    private function _createDatabaseUserTable()
    {
        $fields = array(
            'id' => array(
                'type' => 'int'
                ,'constraint' => 11
                ,'unsigned' => true
                ,'auto_increment' => true
            )
            ,'login' => array(
                'type' => 'varchar'
                ,'constraint' => 30
            )
            ,'password' => array(
                'type' => 'varchar'
                ,'constraint' => 64 // For sha256
            )
            ,'email' => array(
                'type' => 'varchar'
                ,'constraint' => 50
            )
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', true);
        
        return $this->dbforge->create_table('user', true);
    }
    
    private function _createDatabaseOtherTable()
    {
        
    }

}