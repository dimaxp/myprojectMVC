<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 12.01.2019
 * Time: 8:33
 */

namespace DIMA\WSPACE\Models;


use DIMA\WSPACE\Base\DBConnection;
use DIMA\WSPACE\Base\Cookies;

class AccountModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_ERROR = "LOGIN_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";
    const MAIL_EXISTS = "MAIL_EXISTS";

    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function loginExists($userData){
        $sql = 'SELECT login FROM user WHERE login =:login';
        $params = ['login'=>$userData['login']];

        $answer = $this->db->execute($sql, $params, false);
        return $answer;
    }


    public function mailExists($userData){
        $sql = 'SELECT email FROM user WHERE email =:email';
        $params = ['email'=>$userData['email']];

        $answer = $this->db->execute($sql, $params, false);
        return $answer;
    }



    public function addUser($userData){

        if ($this->loginExists($userData)){
            return self::USER_EXISTS;
        }

        if ($this->mailExists($userData)){
            return self::MAIL_EXISTS;
        }




        $sql = "INSERT INTO user (login, hash, email)
              VALUES (:login, :hash, :email)";
        $params = [
            'login'=>$userData['login'],
            'hash'=>password_hash($userData['pwd'], PASSWORD_DEFAULT),
            'email'=>$userData['email'],
        ];

        $result = $this->db->execute($sql, $params);
        if($result === false) {
            return self::DB_ERROR;
        }
    $_SESSION['login'] = $userData['login'];
        return self::USER_ADDED;
    }

    public function authUser($userData){
        $sql = "SELECT login, hash FROM user 
      WHERE login=:login";
        $params = [
            'login'=> $userData['login']
        ];

        $result = $this->db->execute($sql, $params);

        if (!$result){
            return self::LOGIN_ERROR;
        }

 $hash = $result[0]['hash'];


        if (!password_verify($userData['pwd'], $hash)){
            return self::PWD_ERROR;
        }

        setCookie('1','1', 300000);
    $_SESSION['login'] = $userData['login'];
        return self::USER_AUTH;
    }

}