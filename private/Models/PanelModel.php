<?php

namespace DIMA\WSPACE\Models;

use DIMA\WSPACE\Base\DBConnection;




class PanelModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getAllZadachi(){
        $sql = "SELECT * FROM Zadachi";
        return $this->db->execute($sql, $params);
    }

    public function getAllZametki(){
        $sql = "SELECT * FROM zametki";
        return $this->db->execute($sql, $params);
    }



    public function GotovaZadacha($id){


        $sql = "SELECT * FROM zametki";
        return $this->db->execute($sql, $params);
    }




}