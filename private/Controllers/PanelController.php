<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\PanelModel;
use DIMA\WSPACE\Base\Session;



class PanelController extends Controller
{
    private $PanelModel;
    private $session;

    public function __construct()
    {
        $this->PanelModel = new PanelModel();
        $this->session = new Session();

    }


    public function showPanelAction(){
$this->session->start();
        if (!$this->session->getData('id'))
{
 header("Location: /");
 exit;
}


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



    public function fileDobavitAction($request) {
        $files = $request->files();
     $this->PanelModel->dobavitFile($files);
      //  return parent::generateAjaxResponse($answer);
    }







    public function zametkaDelAction($request) {
        $getData = $request->params();
        $answer = $this->PanelModel->zametkaDel($getData);
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