<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\CellModel;




class CellController extends Controller
{
    private $CellModel;
    public function __construct()
    {
        $this->CellModel = new CellModel();
    }
    public function showCellAction(){

        $view = 'cell_view.php';
        $view_zametka = 'zametka_view.php';
        $data = $this->CellModel->getAllCell();
        return parent::generateResponse($view,$view_zametka, $data);
    }


    public function gotovoCellAction($id) {

 //  $chto = $this->CellModel->gotovaCell($request);
var_dump($id);
    }



}