<?php
/**
 * Created by PhpStorm.
 * User: BB
 * Date: 27.12.2018
 * Time: 12:28
 */

namespace DIMA\WSPACE\Controllers;


use DIMA\WSPACE\Base\Controller;
use DIMA\WSPACE\Models\AccountModel;

class AccountController extends Controller
{
    private $accountModel;
    public function __construct()
    {
     $this->accountModel = new AccountModel();
    }

    public function accountAction(){
        $view = 'account_view.php';
        $title =  "Аккаунт";
        $data = [
            'title' => $title
        ];
        return parent::generateResponse($view, $data);
    }

    public function registrationAction($request){
        $postData = $request->post(); // массив $_POST
        $answer = $this->accountModel->addUser($postData);
        return parent::generateAjaxResponse($answer);
    }

    public function authAction($request){
        $postData = $request->post(); // массив $_POST
        $answer = $this->accountModel->authUser($postData);

        return parent::generateAjaxResponse($answer);
    }

}