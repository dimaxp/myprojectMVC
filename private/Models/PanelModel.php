<?php

namespace DIMA\WSPACE\Models;

use DIMA\WSPACE\Base\DBConnection;




class PanelModel
{

    const ZADACHA_ADDED = "ZADACHA_ADDED";
    const ZADACHA_PROBLEMA = "ZADACHA_EXISTS";
    const ZADACHA_GOTOVA = "ZADACHA_GOTOVA";

    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getAllZadachi(){
        $sql = "SELECT * FROM Zadachi WHERE gotovo = 0";
        return $this->db->execute($sql, $params);
    }

    public function getAllZametki(){
        $sql = "SELECT * FROM zametki";
        return $this->db->execute($sql, $params);
    }













    public function dobavitZametka($serdce){
        $soderganie = $serdce['zametka_name'];


        $sql = "INSERT INTO zametki (user_id, text_zametka)
VALUES (:user_id, :soderganie)";



        $params = [
            'user_id' => '1',
            'soderganie' => $soderganie
            ];


        return $this->db->execute($sql, $params);



        /* if($result === false) {
             return self::ZADACHA_PROBLEMA;
         }
         return self::ZADACHA_ADDED;*/



    }










    public function dobavitZadacha($serdce){
   $soderganie = $serdce['zadacha'];


        $sql = "INSERT INTO zadachi (user_id, zadacha, gotovo, data_z, razdel)
VALUES (:user_id, :soderganie, :gotovo, :data_z, :razdel)";



        $params = [
            'user_id' => '1',
            'soderganie' => $soderganie,
            'gotovo' => '0',
            'data_z' => 'hello',
            'razdel' => 'hello'];


        $result = $this->db->execute($sql, $params);





        $lastid = $this->db->connection->lastInsertId();

//var_dump($result);


      if($result === false) {
           return 33;

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




}