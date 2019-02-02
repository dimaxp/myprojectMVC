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
        $sql = "SELECT * FROM Zadachi";
        return $this->db->execute($sql, $params);
    }

    public function gotovaCell($id){
$chto = $id['id'];



    $sql = 'UPDATE Users SET `name`=:name WHERE `id`=:id';
  $params = ['id'=>$chto, 'name'=>'7747'];
   return $this->db->execute($sql, $params);
    }



}
