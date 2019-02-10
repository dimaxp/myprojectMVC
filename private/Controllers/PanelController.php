<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\PanelModel;
use DIMA\WSPACE\Models\AccountModel;
use DIMA\WSPACE\Base\Session;
use DIMA\WSPACE\Base\Cookies;



class PanelController extends Controller
{
    private $PanelModel;
    private $AccountModel;
    private $session;
    private $cookie;

    public function __construct()
    {
        $this->PanelModel = new PanelModel();
        $this->session = new Session();
        $this->cookie = new Cookies();
        $this->AccountModel = new AccountModel();

    }


    public function showPanelAction(){
//$this->session->start();

$this->proverkaCookie();



        $view = 'panel_view.php';


        $zadachi = $this->PanelModel->getAllZadachi();
        $zametki = $this->PanelModel->getAllZametki();
        $motivators = $this->PanelModel->getAllMotivators();
        $tetrad = $this->PanelModel->getAllTetrad();


        $data = ['zadachi' => $zadachi, 'zametki' => $zametki, 'motivators' => $motivators, 'tetrad' => $tetrad];
        return parent::generateResponse($view, $data);
    }


    public function proverkaCookie() {

        if (!$this->session->getData('id') && !$this->cookie->setField('key'))
        {
            header("Location: /");
            exit;
        }
        elseif (!$this->session->getData('id') && $this->cookie->setField('key')){
        $answer = $this->AccountModel->proverkaCook();
     if(!$answer){ header("Location: /"); exit;}
        }







    }













    public function zadachaGotovaAction($request) {
        $getData = $request->params();
        $answer = $this->PanelModel->GotovaZadacha($getData);
        return parent::generateAjaxResponse($answer);
 }



    public function fileDobavitAction($request) {
        $files = $request->files();
        $answer =  $this->PanelModel->dobavitFile($files);
      return parent::generateAjaxResponse($answer);
    }




    public function fileDellAction($request) {
        $getData = $request->params();
        $answer = $this->PanelModel->delFile($getData);
        return parent::generateAjaxResponse($answer);
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






    public function tetradAddAction($request) {
        $postData = $request->post();
        $answer =  $this->PanelModel->tetradAdd($postData);
        return parent::generateAjaxResponse($answer);
    }
















}