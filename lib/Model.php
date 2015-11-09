<?php
class Model {
    
    public $mysql;
    public $db;
    
    public function __construct() {
        
        $this->mysql = mysql_connect(DB_HOST,DB_USER,DB_PWD);
        $this->db    = DB_NAME;
    }
    
    
    public function queryAll($table) {
        
        mysql_select_db($this->db, $this->mysql);
        $result = mysql_query("select * from {$table}");
        $ret = array();
        while($row = mysql_fetch_array($result)) {
            $ret[] = $row;
        }
        return $ret;
        
    }
    
    public function query($table, $sql) {
        
        mysql_select_db($this->db, $this->mysql);
        $result = mysql_query($sql);
        $ret = array();
        while($row = mysql_fetch_array($result)) {
            $ret[] = $row;
        }
        mysql_close($this->mysql);
        return $ret;
    }
    
    public function sql($table, $sql) {
        mysql_select_db($this->db, $this->mysql);
        $result = mysql_query($sql);
        return $result;
        
    }
    
}