<?php
namespace DIMA\WSPACE\Models;

use DIMA\WSPACE\Base\DBConnection;

class CellModel
{
    private $db;
    public function __construct()
    {
       $this->db = new DBConnection();
    }

    public function getAllCell(){
        $sql = "SELECT * FROM Users";
        return $this->db->execute($sql, $params);
    }

    public function gotovaCell($id){




       // $sql = "DELETE FROM Users WHERE id=:id";
    //  $params = ['id'=>$id];
     //   return $this->db->execute($sql, $params);
    }



}
