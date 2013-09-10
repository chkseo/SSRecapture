<?php
class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '19421942';
    private $name = 'ssrecapture';
    
    
    private function connect(){
        @mysql_connect($this->host, $this->user, $this->pass) 
            or Core::error_msg('Невозможно установить соединение с mysql сервером');
        
        @mysql_select_db($this->name) 
            or Core::error_msg('Невозможно подключиться к таблице ' . $this->name);
    }
    
    static public function get_connect(){
        $db = new self;
        $db->connect();
    }
}
