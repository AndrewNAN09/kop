<?php
namespace application\controllers;
use application\core\Controller;
use application\models\Main;


class MainController extends Controller {

    public function indexAction(){
        //var_dump($_SESSION);
        $_SESSION=array();
        session_destroy() ;
        //var_dump($_SESSION);
        $main = new Main();
        $data = $main->vivodstat();
        //var_dump($data );
        $this->view-> render('Главная страница',$data,'','');
    }
    public function avtorizAction(){
        $this->view-> render('Вход','','','');
    }
    public function registrAction(){
        $this->view-> render('Регистрация','','','');
    }
    public function vvodparolAction(){
        $this->view-> render('Ввод пароля','','','');
    }


}