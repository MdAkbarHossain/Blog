<?php

  class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;
    public $conn;
    public $error;

    private function connectDB(){
      $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
      if(!$this->conn){
        $this->error = "Connection failed".$this->conn->connect_error ;
        return FALSE;
      }
    }
  }
