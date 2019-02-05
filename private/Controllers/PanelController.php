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
        $answer = $this->PanelModel->GotovaZadacha($getData);
        return parent::generateAjaxResponse($answer);




    }

    public function zadachaDobavitAction($request) {
        $postData = $request->post();
        $answer =  $this->PanelModel->dobavitZadacha($postData);
      return parent::generateAjaxResponse($answer);
    }




    public function zametkaDobavitAction($request) {
        $postData = $request->post();
        $answer =  $this->PanelModel->dobavitZametka($postData);
        return parent::generateAjaxResponse($answer);
    }












}