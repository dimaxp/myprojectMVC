<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\AccountModel;
use DIMA\WSPACE\Base\Session;
use DIMA\WSPACE\Base\Cookies;



class SettingsController extends Controller
{
    private $AccountModel;
    private $session;
    private $cookie;

    public function __construct()
    {
        $this->session = new Session();
        $this->cookie = new Cookies();
        $this->AccountModel = new AccountModel();
    }


    public function showSettingsAction(){
        $accaunt_info = $this->AccountModel->getUserSettings();
        $view = 'settings_view.php';
        $data = ['accaunt_info' => $accaunt_info];
        return parent::generateResponse($view, $data);
    }


    public function ChangeMailAction($request) {
        $postData = $request->post();
        $answer = $this->AccountModel->changeUserMail($postData);
        return parent::generateAjaxResponse($answer);

    }


    public function ChangePassAction($request) {
        $postData = $request->post();
        $answer = $this->AccountModel->changeUserPass($postData);
        return parent::generateAjaxResponse($answer);

    }



















}