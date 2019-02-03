<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\PanelModel;




class PanelController extends Controller
{
    private $PanelModel;

    public function __construct()
    {
        $this->PanelModel = new PanelModel();
    }


    public function showPanelAction(){

        $view = 'panel_view.php';

        $zadachi = $this->PanelModel->getAllZadachi();
        $zametki = $this->PanelModel->getAllZametki();

        $data = ['zadachi' => $zadachi, 'zametki' => $zametki];
        return parent::generateResponse($view, $data);
    }



    public function zadachaGotovaAction($request) {
        $getData = $request->params();
        $this->PanelModel->GotovaZadacha($getData);
    }

    public function zadachaDobavitAction($request) {
        $postData = $request->post();
      $this->PanelModel->dobavitZadacha($postData);
       // return parent::generateAjaxResponse($answer);
    }










}