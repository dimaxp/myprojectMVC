<?php
namespace DIMA\WSPACE\Controllers;
use DIMA\WSPACE\Base\Controller;

class IndexController extends Controller
{


    public function indexAction()
    {
        $title = 'Главная';
        $view = 'index_view.php';



        $data = [
            'title' => $title
        ];

        return parent::generateResponse($view, $data);
    }

}


