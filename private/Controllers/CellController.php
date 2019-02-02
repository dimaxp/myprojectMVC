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
        $data = $this->CellModel->getAllCell();
        return parent::generateResponse($view, $data);
    }


    public function gotovoCellAction($request) {

        $getData = $request->params();


$this->CellModel->gotovaCell($getData);

    }



}