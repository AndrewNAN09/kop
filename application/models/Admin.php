<?php
namespace application\models;
use application\core\Model;
use application\lib\Db;
use Imagick;
use PDO;


class Admin extends Model{
public $zak=[];

    public function zagruz($tmp_name, $post)
    {//загружаем и зжимаем картинку
        $data = $this->db->vivodstat();
        //var_dump($tmp_name);
        $id = $data[0]['id'] + 1;


        //$img = new Imagick ($tmp_name);
        //$img->cropThumbnailImage(100, 100);//вызываем метод который будет конвертировать все картинки в этот размер
        //$img->setImageCompressionQuality(80);// Устанавливает качество сжатия изображения 80%
        //$img->writeImage($_SERVER['DOCUMENT_ROOT'] . '/public/materials/'.$id.'.jpg'); //— Записывает изображение по указанному имени файла

        $params = [
            'title' => $post['title'],
            'text' => $post['text']
        ];
        $this->db->zagruz($params);
        move_uploaded_file($tmp_name, 'public/materials/' . $id . '.jpg');//move_uploaded_file — Перемещает загруженный файл в новое место, destination

    }
    public  function zakazes(){
        $db = new Db();
        $a=$db->db->prepare("SELECT id_zak FROM `soed` ORDER BY obr DESC ");
        //var_dump($a);
        $a->execute();//
        $idzak = $a->fetchAll(PDO::FETCH_ASSOC);


        foreach ($idzak as $id){

//var_dump( $id);
        $a=$db->db-> prepare("SELECT * ,zak.name AS mame_z,zak.id AS id_z
FROM `soed` 
JOIN `zak`
ON zak.id_zak = soed.id_zak
JOIN `user`
ON user.id = zak.id_user
WHERE soed.id_zak = :id_zak

");
         $a->execute(array('id_zak'=>$id['id_zak']));

        //echo "<pre>";
       $this ->zak[] = $a->fetchAll(PDO::FETCH_ASSOC);
    }
        return $this->zak;
        }
public function delete($id_zak){
        $db = new Db();
    $db->db->exec("DELETE FROM `zak` WHERE id_zak = $id_zak");
    $db->db->exec("DELETE FROM `soed` WHERE id_zak = $id_zak");
    //var_dump($a);

}
    }