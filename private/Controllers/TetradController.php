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
        $accaunt_info = $this->PanelModel->getOneTetrad($getData);
        $view = 'tetrad_view.php';
        $data = ['tetrad_info' => $accaunt_info];
        return parent::generateResponse($view, $data);
    }





















}