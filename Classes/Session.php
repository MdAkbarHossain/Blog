<?php

  class Session{
    public static function init(){
      session_start();
    }

    public static function destory(){
      session_destroy();
      header('Location:login.php');
      exit();
    }

    public static function set($key, $value){
      $_SESSION[$key] = $value;
    }

    public static function get($key){
      if(isset($_SESSION[$key])){
        return $_SESSION[$key];
      }
      else{
        return FALSE;
      }
    }

    public static function check(){
      self::init();
      if(self::get('login') == FALSE){
        self::destory();
      }
    }

    public static function checkLogin(){
      self::init();
      if(self::get('login') == true){
        header('Location:index.php');
        exit();
      }
    }


  }
