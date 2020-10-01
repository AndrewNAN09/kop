<?php

namespace application\controllers;
use application\core\Controller;
use application\models\Polzavotel;



class PolzavotelController extends Controller
{
    public $vivod_stat=20;
    public $page = 1;
    public $total_stat;
    public $s;
    public $name;




    public function vhodAction(){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        $polzavotel = new Polzavotel;
        $data = $polzavotel->provPolzavotel();
        if ($data['login'] == $_POST['login'] && $data['password'] == $_POST['password']) {

            $_SESSION['name']= $data['name'];
            $this->view->jeisonok('polzavotel/lichka');





        } else {
            $this->view->jeison('success', "Данной учетной записи не существует",'main/avtoriz');
            $this->view->redirect('main/registr');
        }
    }

    public function zaregAction(){
        if(isset($_POST['name'])) {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['tel'] = $_POST['tel'];
            $_SESSION['email'] = $_POST['email'];
            $polzavotel = new Polzavotel;
            $data = $polzavotel->provPolzavotel();
            if ($data['login'] == $_POST['login']) {
                $this->view->jeison('success', "Данный логин занят",'main/registr');
            } else {

                $polzavotel = new Polzavotel;

                $polzavotel->otpravkaPolzavotel();
                $this->view->jeisonok('main/vvodparol');



            }
        }else{
            $polzavotel = new Polzavotel;

            $polzavotel->otpravkaPolzavotel();
            $this->view->redirect('main/vvodparol');
        }
    }
    public function proverAction(){
        $polzavotel = new Polzavotel;
        if($polzavotel->proverPolzavotel()){

                $polzavotel->zanosPolzavotel();
                $data = $polzavotel->provPolzavotel();
            $this->view->redirect('polzavotel/lichka');
            
            } else {
                $this->view->redirect('main/vvodparol');

            }
    }
    public function deleteSESAction(){
        $_SESSION['a']=[];
        $_SESSION['b']=[];
        //session_destroy();
    }


    public function lichkaAction(){
        $_SESSION['a']=[];
        if (!isset($_SESSION['name'])) {
            header('location: /');
        }
        $polzavotel = new Polzavotel;
        $data = $polzavotel->provPolzavotel();
        $data1=$polzavotel->colkor();

        $this->view->render('Личный кабинет', $data,$data1,'');

        }


        public function paginatop(){

            $polzavotel = new Polzavotel;
            $total_stat = $polzavotel->assortPosl();////нащел общее кол-во статей

            $this->total_stat=$total_stat;
            //$this->vivod_stat = 100;


           // var_dump($this->route);
            $url = trim($_SERVER['REQUEST_URI'],'/');

            preg_match_all('/\/([^\/]+)/',$url,$mat4);//обрабатываем урл покажет все в массиве
            //var_dump($mat4);
            //var_dump($mat4['1']['0']);
            if($mat4['1']['0']=='assortiment' && empty($mat4['1']['1'])){
            $page = 1;
            }else{$page  =$mat4['1']['1'];
            }
            $this->page = $page;

            $total_page = ceil($total_stat/$this->vivod_stat); //находим максимальное количество страниц  ceil округляем в большую сторону
            $a=1;
            $nach_otobr =($this->vivod_stat*$page)-$this->vivod_stat ; //начать отоброжать с 0  и выводим 3 статьи
            return $nach_otobr ;

}

        public function assortimentAction(){
            $polzavotel = new Polzavotel;
        $data1=$polzavotel->colkor();
            if (!isset($_SESSION['name'])) {
                header('location: /');
            }
           // var_dump($_POST['poisk']);
            //var_dump($_POST['poisk']);

            if(isset($_POST['poisk'])) {
                $this->s=$_POST['poisk'];
                $data = $polzavotel->assort(1, 2,$this->s);
                $c=ceil($this->total_stat/$this->vivod_stat);
            }else {
                $this->s = 1;
                $nach = $this->paginatop();
                $data = $polzavotel->assort($nach, $this->vivod_stat, $this->s);
                $c = ceil($this->total_stat / $this->vivod_stat);
            }
        $this->view->render('Ассортимент',$data, $c,$data1);
        }
        public function ajaxAction(){
            //var_dump($_POST);
            $polzavotel = new Polzavotel;
            if(isset($_POST['idkk'])){
                //var_dump($_POST['idkk']);
                $polzavotel->deleteKor1($_POST['idkk']);
            }else {
                if (isset($_POST['idk'])) {
                    $data = $polzavotel->updataKor($_POST);
                } else {
                    $data = $polzavotel->zanosKor($_POST);
                }
            }
        }


        public function korzenaAction(){
            if (!isset($_SESSION['name'])) {
                header('location: /');
            }
            $polzavotel = new Polzavotel;
            $data = $polzavotel->kor();

        $this->view->render('Корзина',$data,'','');
    }

    public function zakazAction(){

        $polzavotel = new Polzavotel;
        $data = $polzavotel->zanosZak();

        $this->view->redirect('polzavotel/lichka');

    }

    public function historyAction(){
        if (!isset($_SESSION['name'])) {
            header('location: /');
        }
        $polzavotel = new Polzavotel;
        $data = $polzavotel->history();
//echo "<pre>";
//var_dump($data[1]);
//exit();
        $this->view->render('История заказов', $data,'','');
    }

    public function chatAction(){
        if (!isset($_SESSION['name'])) {
            header('location: /');
        }
            $this->view->render('Чат', '','','');
    }
    public function chat1Action()
    {
        $polzavotel = new Polzavotel;
        $data = $polzavotel->chat1();

        foreach ($data as $key){
            echo "<div style='color:red;font-size:12px'>".$key['date']." ".$key['name']."</div>".$key['text'] .'</br>';
        }
    }
 public function chat_dobavAction()
 {
     $polzavotel = new Polzavotel;
     $polzavotel->chat_dobav($_POST['text']);
 }
}