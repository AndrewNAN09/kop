<?php
namespace application\controllers;
use application\core\Controller;
use application\models\Admin;


class AdminController extends Controller {

    public function indexAction(){
        $this->view-> render('Adminka','','','');
    }

    public function zagrstatAction(){

        $this->view-> render('Добавление статьи','','','');
    }

    public function zagruzAction(){
//var_dump($_FILES);

$admin = new Admin;
        $admin->zagruz($_FILES['img']['tmp_name'], $_POST);
//var_dump($_FILES);
        $this->view->jeison('success', "Данные загрузились",'/kopeika.ru/admin');
}
    public function zakazesAction()
    {
        $admin = new Admin;
        $data = $admin->zakazes();

        $this->view-> render('Обработка заказов',$data,'','');
    }

    public function deleteAction(){



        $admin = new Admin;
       $admin->delete($_POST['idzak']);
    }
}