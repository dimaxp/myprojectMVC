<?php

namespace DIMA\WSPACE\Base;
class Session
{
    private $session;
    public function __construct()
    {$this->session = $_SESSION;

    }
    public static function start(){session_start();}




    public function setData($key, $value){ // null null
        if (!$key or !$value) {
            // выбросить исключение
            var_dump('передайте корректные $key и $value');
            return false;
        }
     //  $this->session[$key] = $value;
  $_SESSION[$key] = $value;
//       return true;
    }
    public function getData($key){
        if(!isset($_SESSION[$key])) {
            // выбросить исключение
         //   var_dump($key.' не найден');

            return false;
        }
        return $_SESSION[$key];
       // return $this->session[$key];
    }
    public function close(){
        session_destroy();
//        session_unset();
//        unset($_SESSION); можно ли так делать?
        unset($this->session);
    }
}