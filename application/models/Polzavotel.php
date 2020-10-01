<?php

namespace application\models;
use application\core\Model;
use application\lib\Db;
use PDO;
class Polzavotel extends Model
{
public $itog;

    public function provPolzavotel()
    {
        $params = [
            'login' => $_SESSION['login'],
        ];
        $dan = $this->db->vivod($params);
        $_SESSION['id_user'] = $dan['id'];

        return $dan;
    }
    public function otpravkaPolzavotel(){
        $_SESSION['a'] = rand(10000, 99999);
        $_SESSION['b'] =1;
        mail($_SESSION['email'], 'Пароль для подтверждения',$_SESSION['name'].'добрый день, пароль для регистрации: '. $_SESSION['a']);

}
public function proverPolzavotel(){
if($_SESSION['a'] !=[]) {
    if ($_POST['parol'] == $_SESSION['a']) {
        return true;
    } else {
        $_SESSION['b']=2;
        return false;
    }
}else{
    return false;
}

}

    public function zanosPolzavotel()
    {
//var_dump($a);
        $params = [
            'name' => $_SESSION['name'],
            'login' => $_SESSION['login'],
            'password' => $_SESSION['password'],
            'tel'=> $_SESSION['tel'],
            'email'=>$_SESSION['email'],
        ];
        //var_dump($params);
        $this->db->vvod($params);

    }

    public function assort($a, $b,$s)
    {
        return $this->db->vivodass($a, $b,$s);

    }

    public function assortPosl()
    {

    return $this->db->lastInsertId();

    }


    public function zanosKor($a)
    {
        //var_dump($a);
        $params = [
            'name' => $a['name'],
            'id_tovar'=>$a['id'],
            'kol' => $a['kol'],
            'summa' => $a['summa'],
            'id_user' => $_SESSION['id_user'],
        ];
        //var_dump($params);
        $this->db->vvodKor($params);
    }
public function updataKor($a){
    $params = [
        'id'=>$a['idk'],
        'kol' => $a['kol'],
        'summa' => $a['summa'],

    ];
    //var_dump($params);
    $this->db->updataKor($params);
}
public function deleteKor1($a){
    $this->db->deleteKor1($a);
}

    public function kor()
    {
        return $this->db->vivodkor();
    }
    public function colkor(){
       return $this->db->colkor();
}

    public function zanosZak()
    {
        $data = $this->db->vivodkor();

        foreach ($data as $key=>$vol){
            $this->itog += $vol['summa'];
        }
        //echo $itog;
        $dan = $this->db->soed($this->itog); //находим максимальное айди заказа
        //echo "<pre>";
        $id_soed = $dan['0']['MAX(id_zak)'];



        foreach ($data as $key => $vol) {
            //var_dump($vol);

        $params = [
            'id_zak' => $id_soed,
            'id_tovar' => $vol['id'],
            'name' => $vol['name'],
            'kol' => $vol['kol'],
            'summa' => $vol['summa'],
            'itog'=>$this->itog,
            'id_user' => $_SESSION['id_user'],
        ];

        $this->db->vvodZak($params);
    }
$this->db->deleteKor();


}





    public function history(){
        return $this->db->history();

    }


    public function chat1()
    {
        $db = new Db();
        $a = $db->db->prepare("SELECT * 
FROM `chat` 
JOIN `user` 
ON  chat.id_user = user.id
  ORDER BY id_chat DESC LIMIT  25");
         $a->execute();


         return $a->fetchAll(PDO::FETCH_ASSOC);
        //return $this->db->chat1();
    }
    public function chat_dobav($text)
    {
        $db = new Db();
        $params = [
            'text' => $text,
            'id_user' => $_SESSION['id_user'],
            ];
        $db->db->exec("DELETE from chat WHERE id_chat < (SELECT max(id_chat)-98 FROM chat) ");

        $a =$db->db->prepare("INSERT INTO  `chat` SET id_user = :id_user, text = :text");

        $a->execute($params);//

    }

}
