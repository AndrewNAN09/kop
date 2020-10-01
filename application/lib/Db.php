<?php
namespace application\lib;//указываем где находится данная БД

use PDO;//мы используем use PDO

class Db{
    public $db;

    public $z= [];
    public $d= [];
    public $zak=[];
    public $user=[];
    public $soed=[];
    public $itog1=[];
    public $itog=[];
public $itog2 = [];


    public function __construct(){
        $config = require 'application/config/db.php';
        //подключение к БД
        $this->db = new PDO('mysql:host=' . $config['host'] . '; dbname=' . $config['name'] . '', $config['user'], $config['password']);

        //echo 'подключился класс БД';
        // echo '<br>';

    }

    public function vvod($params){

        $a =$this->db->prepare("INSERT INTO  `user` SET name = :name, login = :login, password = :password, tel = :tel, email = :email");
        //var_dump($params);
        return $a->execute($params);//
    }
    public function vivod($params){
        $a=$this->db->prepare("SELECT * FROM `user` WHERE login = :login");
        //var_dump($a);
        $a->execute($params);//
        return $a->fetch(PDO::FETCH_ASSOC);
    }

    public function vivodass($a1,$b,$s)//выводим весь ассортимент
    {
        if($s!=1){

        $a = $this->db->prepare("SELECT * FROM `11` WHERE `name` LIKE ? ");
        //var_dump($s);
        $a->execute(array("%$s%"));//
      return $a->fetchAll(PDO::FETCH_ASSOC);
    }else{$a = $this->db->prepare("SELECT * FROM `11`  LIMIT $a1,$b; ");
            //var_dump($a);
            $a->execute();//
            return $a->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    public  function lastInsertId()//количество записей
    {
        $query=$this->db->query( "SELECT COUNT(*) as count FROM `11` ");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $row=$query->fetch();
        return $members=$row['count'];
    }


public function vvodKor($params){

        $a =$this->db->prepare("INSERT INTO  `kor` SET name = :name, id_tovar=:id_tovar, summa = :summa, kol = :kol, id_user = :id_user");
        //var_dump($a);
        return $a->execute($params);//
    }
    public function vivodkor()
    {
        $a = $this->db->prepare("SELECT * FROM `kor` WHERE id_user = :id_user");
        //var_dump($a);
        $a->execute(array('id_user'=>$_SESSION['id_user']));//
        return $a->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updataKor($params){
        $a = $this->db->prepare("UPDATE `kor` SET `kol` = :kol, `summa` =:summa WHERE `id` = :id");
        $a->execute($params);
    }

    public function colkor(){
        $a = $this->db->prepare("SELECT id FROM `kor` WHERE id_user = :id_user");
        //var_dump($a);
        $a->execute(array('id_user'=>$_SESSION['id_user']));//

       return $members=$a->rowCount();

    }

    public function deleteKor(){

        $a = $this->db->exec("DELETE FROM `kor` WHERE id_user = '".$_SESSION['id_user']."'");
        //var_dump($a);

    }
    public function deleteKor1($a){
        $a = $this->db->exec("DELETE FROM `kor` WHERE id = $a");
    }

public function soed($itog)
{
    $a = $this->db->prepare("INSERT INTO  `soed` SET id_user = :id_user, itog= :itog");
    //var_dump($a);
    $a->execute(array('id_user' => $_SESSION['id_user'], 'itog' => $itog));

    $a = $this->db->prepare("SELECT MAX(id_zak) FROM `soed` WHERE id_user = :id_user");
    //var_dump($a);
    $a->execute(array('id_user' => $_SESSION['id_user']));//
    return $a->fetchAll(PDO::FETCH_ASSOC);

}
    public function vvodZak($params){
        $a =$this->db->prepare("INSERT INTO  `zak` SET id_zak = :id_zak,itog=:itog, id_tovar =:id_tovar, name = :name, summa = :summa, kol = :kol, id_user = :id_user");
        //var_dump($a);
        return $a->execute($params);//
    }
    public  function history(){

        $a=$this->db->prepare("SELECT * FROM `soed` WHERE id_user = :id_user");
        //var_dump($a);
        $a->execute(array('id_user'=>$_SESSION['id_user']));//
        //echo "<pre>";
        $d=$a->fetchAll(PDO::FETCH_ASSOC);
//var_dump($d);
            foreach ($d as $key => $vol) {
                $a=$this->db->prepare("SELECT * FROM `zak` WHERE id_zak = :id_zak");
                $a->execute(array('id_zak'=>$vol['id_zak']));
                $this->z[]=$a->fetchAll(PDO::FETCH_ASSOC);
            }
            $this->d=$d;

            return [$this->d, $this->z];
    }

    public function zagruz($params)
    {
        $a = $this->db->prepare("INSERT INTO  `stat` SET title = :title,text =:text");
        //var_dump($a);
        $a->execute($params);
        $b = $this->db->prepare("SELECT MAX(id) FROM `stat`");
        $b->execute();
        return $b->fetchAll(PDO::FETCH_ASSOC);
    }

    public function vivodstat(){

        $b = $this->db->prepare("SELECT MAX(id) FROM `stat`");
         $b->execute();
        $id = $b->fetchAll(PDO::FETCH_ASSOC);
        $a = $this->db->prepare("SELECT * FROM `stat` WHERE id = :id");
        $a->execute(array('id'=>$id[0]['MAX(id)']));
        return $a->fetchAll(PDO::FETCH_ASSOC);
    }

    public function vivodallzak(){
        $a=$this->db->prepare("SELECT * FROM `soed`");
        $a->execute();
        $b=$a->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($b);



        foreach ($b as $soe){
//var_dump($soe);


            $a=$this->db->prepare("SELECT * FROM `zak` WHERE id_zak = :id_zak");
            $a->execute(array('id_zak'=>$soe['id_zak']));
            $zak=$a->fetchAll(PDO::FETCH_ASSOC);
            foreach ($zak as $keyzak=>$valzak){

                var_dump($valzak);
            }


            $a=$this->db->prepare("SELECT * FROM `user` WHERE id = :id_user");
            $a->execute(array('id_user'=>$soe['id_user']));
            $user=$a->fetchAll(PDO::FETCH_ASSOC);

            foreach ($user as $keyuser=>$valuser){

                var_dump($valuser);
            }
            $a=$this->db->prepare("SELECT * FROM `soed` WHERE id_zak = :id_zak");
            $a->execute(array('id_zak'=>$soe['id_zak']));
            $soed=$a->fetchAll(PDO::FETCH_ASSOC);
            foreach ($soed as $keysoed=>$valsoed){


                var_dump($valsoed);
            }
            echo "<br>";
        }
        }


    }
