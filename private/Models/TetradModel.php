public function getOneTetrad($id){
$chto = $id['id'];



$sql = "SELECT * FROM tetrad_desc WHERE terad_id =:terad_id";
$params = [
'terad_id' => $chto ];


return $this->db->execute($sql, $params);
}