<?php

  class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;
    public $conn;
    public $error;

    public function connectDB(){
      $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
      if(!$this->conn){
        $this->error = "Connection failed".$this->conn->connect_error ;
        return FALSE;
      }
    }

    public static function select($query){
      $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
      if($result->num_rows > 0){
        return $result;
      }
      else{
        return FALSE;
      }
    }
  }
