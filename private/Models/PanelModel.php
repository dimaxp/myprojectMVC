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




    public function getAllMotivators(){
        $id_user = $this->session->getData('id');
        $sql = "SELECT * FROM motivator WHERE user_id =:user_id";
        $params = [
            'user_id' => $id_user ];


        return $this->db->execute($sql, $params);
    }





    public function getAllTetrad(){
        $id_user = $this->session->getData('id');
        $sql = "SELECT * FROM tetrad WHERE user_id =:user_id";
        $params = [
            'user_id' => $id_user ];


        return $this->db->execute($sql, $params);
    }









    public function getOneTetrad($id){
        $chto = $id['id'];



        $sql = "SELECT * FROM tetrad_desc WHERE terad_id =:terad_id";
        $params = [
            'terad_id' => $chto ];


        return $this->db->execute($sql, $params);
    }












    public function getAllZadachi(){

$id_user = $this->session->getData(id);

        $sql = "SELECT *, DATE_FORMAT(data_z, '%d.%m.%Y') as new_date FROM Zadachi WHERE gotovo = 0 AND user_id =:user_id";
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
$mycatalog = "static/motiv/";



        $name = $serdce['picture']['name'];
        $tmp_name = $serdce['picture']['tmp_name'];
        move_uploaded_file($tmp_name, "static/motiv/".$name);

        if(preg_match('/[.](GIF)|(gif)$/', $name)) {
            $im = imagecreatefromgif($mycatalog.$name) ; //если оригинал был в формате gif, то создаем изображение в этом же формате. Необходимо для последующего сжатия
        }
        if(preg_match('/[.](PNG)|(png)$/', $name)) {
            $im = imagecreatefrompng($mycatalog.$name) ;//если оригинал был в формате png, то создаем изображение в этом же формате. Необходимо для последующего сжатия
        }

        if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/', $name)) {
            $im = imagecreatefromjpeg($mycatalog.$name); //если оригинал был в формате jpg, то создаем изображение в этом же формате. Необходимо для последующего сжатия
        }



        $w = 520;
        $h = 306;
        $w_src = imagesx($im); //вычисляем ширину
        $h_src = imagesy($im); //вычисляем высоту изображения
        $dest = imagecreatetruecolor($w,$h);
        imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $h, $w_src, $h_src);
        $date=time(); //вычисляем время в настоящий момент.
        $normput = $mycatalog.$date.".jpg";
        imagejpeg($dest, $mycatalog.$date.".jpg");


        $delfull = $mycatalog.$name;
        unlink($delfull);



        $sql = "INSERT INTO motivator (user_id, path)
VALUES (:user_id, :path)";

        $params = [
            'user_id' => $this->session->getData('id'),
            'path' => $normput
        ];


        $result = $this->db->execute($sql, $params);
        $lastid = $this->db->connection->lastInsertId();
        $arr = $lastid.':'.$date;

     return $arr;






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
            'data_z' => date('Y-m-d'),
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




    public function delFile($id){
        $chto = $id['id'];
        $sql = 'DELETE FROM motivator WHERE `id`=:id';
        $params = ['id'=>$chto];
        $result = $this->db->execute($sql, $params);

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








    public function tetradAdd($serdce){
        $id_usera = $this->session->getData(id);
        $title = $serdce['name_tetrad'];

        $sql = "INSERT INTO tetrad (user_id, title)
VALUES (:user_id, :title)";


        $params = [
            'user_id' => $id_usera,
            'title' => $title
        ];


        $result = $this->db->execute($sql, $params);

        $lastid = $this->db->connection->lastInsertId();

        return $lastid;

    }










}