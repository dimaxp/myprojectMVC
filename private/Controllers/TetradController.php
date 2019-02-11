<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\PanelModel;
use DIMA\WSPACE\Base\Session;
use DIMA\WSPACE\Base\Cookies;



class TetradController extends Controller
{
    private $PanelModel;
    private $session;
    private $cookie;

    public function __construct()
    {
        $this->session = new Session();
        $this->cookie = new Cookies();
        $this->PanelModel = new PanelModel();
    }


    public function viewTetAction($request){
        $getData = $request->params();
        $samatetrad = $this->PanelModel->getOneTetrad($getData);
        $tetrad_desc = $this->PanelModel->getOneTetradDesc($getData);
        $view = 'tetrad_view.php';
        $data = ['samatetrad' => $samatetrad, 'tetrad_desc' => $tetrad_desc];
        return parent::generateResponse($view, $data);
    }



    public function delTetAction($request){
        $getData = $request->params();
       $this->PanelModel->delOneTetrad($getData);


            header("Location: /panel");
            exit;


    }



    public function delTetOneZapisAction($request){
        $getData = $request->params();
        $answer = $this->PanelModel->delOneZapisTetrad($getData);
        return parent::generateAjaxResponse($answer);



    }

    public function addTetOneZapisAction($request) {
        $postData = $request->post();
        $answer =  $this->PanelModel->tetradAddoneZapis($postData);
        return parent::generateAjaxResponse($answer);
    }





















}