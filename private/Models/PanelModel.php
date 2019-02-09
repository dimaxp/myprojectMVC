<?php

namespace DIMA\WSPACE\Models;

use DIMA\WSPACE\Base\DBConnection;
use DIMA\WSPACE\Base\Session;
use DIMA\WSPACE\Base\Cookies;




class PanelModel
{

    const ZADACHA_ADDED = "ZADACHA_ADDED";
    const ZADACHA_PROBLEMA = "ZADACHA_EXISTS";
    const ZADACHA_GOTOVA = "ZADACHA_GOTOVA";

    private $db;
    private $session;
    private $cookies;
    public function __construct()
    {
        $this->db = new DBConnection();
        $this->session = new Session();
        $this->cookies = new Cookies();

    }

    public function getAllZadachi(){

$id_user = $this->session->getData(id);

        $sql = "SELECT * FROM Zadachi WHERE gotovo = 0 AND user_id =:user_id";
        $params = [
            'user_id' => $id_user ];


        return $this->db->execute($sql, $params);
    }

    public function getAllZametki(){
      //  $this->session->start();
    $id_user = $this->session->getData(id);
      //  $sql = "SELECT * FROM zametki";
       $sql = "SELECT * FROM zametki WHERE user_id =:user_id";
        $params = [
            'user_id' => $id_user ];
        return $this->db->execute($sql, $params);
    }













    public function dobavitZametka($serdce){
      //  $this->session->start();
        $id_usera = $this->session->getData(id);
        $soderganie = $serdce['zametka_name'];


        $sql = "INSERT INTO zametki (user_id, text_zametka)
VALUES (:user_id, :soderganie)";



        $params = [
            'user_id' => $id_usera,
            'soderganie' => $soderganie
            ];


        $result = $this->db->execute($sql, $params);

        $lastid = $this->db->connection->lastInsertId();

        if($result === false) {
            // дописать какую нибудь ощибку если в базе не записалось

        }
        return $lastid;







        /* if($result === false) {
             return self::ZADACHA_PROBLEMA;
         }
         return self::ZADACHA_ADDED;*/



    }






    public function dobavitFile($serdce){

        var_dump($serdce['picture']);

        $name = $serdce['picture']['name'];
        $tmp_name = $serdce['picture']['tmp_name'];
        move_uploaded_file($tmp_name, "static/motiv/$name");



    }











public function dobavitZadacha($serdce){
//$this->session->start();
$id_usera = $this->session->getData(id);
$soderganie = $serdce['zadacha'];


$sql = "INSERT INTO zadachi (user_id, zadacha, gotovo, data_z, razdel)
VALUES (:user_id, :soderganie, :gotovo, :data_z, :razdel)";



        $params = [
            'user_id' => $id_usera,
            'soderganie' => $soderganie,
            'gotovo' => '0',
            'data_z' => 'hello',
            'razdel' => 'hello'];


        $result = $this->db->execute($sql, $params);

        $lastid = $this->db->connection->lastInsertId();

//var_dump($result);


      if($result === false) {
      // дописать какую нибудь ощибку если в базе не записалось

        }
       return $lastid;



    }







    public function GotovaZadacha($id){
        $chto = $id['id'];
        $sql = 'UPDATE Zadachi SET `gotovo`=1 WHERE `id`=:id';
        $params = ['id'=>$chto];
        $result = $this->db->execute($sql, $params);

        if($result === false) {
            return self::ZADACHA_PROBLEMA;
        }

   return self::ZADACHA_GOTOVA;



    }



    public function zametkaDel($id){
        $chto = $id['id'];
        $sql = 'DELETE FROM zametki WHERE `id`=:id';
        $params = ['id'=>$chto];
        $result = $this->db->execute($sql, $params);

        if($result === false) {
          return self::ZAMETKA_DEL_NO_OK;
        }

      return self::ZAMETKA_DEL_OK;



    }






}