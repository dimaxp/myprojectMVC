<?php
namespace DIMA\WSPACE\Base;

class Cookies
{
    public function setCookie($name, $value){
        // добавить возможность установки значений по умолчанию
        setcookie($name, $value, time()+60*60*24*30, '/');
    }

    public function delCookie($name){

        setcookie($name, '', 1, '/');
        // реализовать удаление Cookie
    }

    public function setField($key){
        if(!isset($_COOKIE[$key])) {
            // выбросить исключение
            //   var_dump($key.' не найден');

            return false;
        }
        return $_COOKIE[$key];
        // return $this->session[$key];



    }
    // реализовать методы получения данных
}




