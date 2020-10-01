<?php
namespace application\models;
use application\core\Model;

class Main extends Model{

    public function vivodstat(){

       return $this->db->vivodstat();


    }

}