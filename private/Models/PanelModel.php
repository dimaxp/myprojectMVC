<?php

namespace DIMA\WSPACE\Models;

use DIMA\WSPACE\Base\DBConnection;




class PanelModel
{

    const ZADACHA_ADDED = "USER_ADDED";
    const ZADACHA_PROBLEMA = "USER_EXISTS";

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


        return $this->db->execute($sql, $params);



       /* if($result === false) {
            return self::ZADACHA_PROBLEMA;
        }
        return self::ZADACHA_ADDED;*/



    }







    public function GotovaZadacha($id){
        $chto = $id['id'];
        $sql = 'UPDATE Zadachi SET `gotovo`=1 WHERE `id`=:id';
        $params = ['id'=>$chto];
        return $this->db->execute($sql, $params);
    }




}