<?php

class Mysql_inc{
    public $db;
    public $connected;
    public $result;
    public $users;
    public $message;

    public function __construct(){
        $this->db=new Mysql_Connect();
        $this->users=new Mysql_Users($this->db);
        $this->message=new Mysql_message($this->db);
    }


}