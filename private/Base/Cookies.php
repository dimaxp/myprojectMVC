<?php
namespace DIMA\WSPACE\Base;

class Cookies
{
    public function setCookie($name, $value){
        // добавить возможность установки значений по умолчанию
        setcookie($name, $value, time()+60*60*24*30, '/');
    }

    public function delCookie(){
        // реализовать удаление Cookie
    }

    public function setField($f){
        $this->field = $f;
    }
    // реализовать методы получения данных
}




