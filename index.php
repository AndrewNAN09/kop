<?php

require './application/lib/Dev.php';

use application\core\Router;//функции и константы, импортируемые из одного и того же namespace, могут группироваться в одном операторе use.
use application\core\Controller;

//авто подключение классов
spl_autoload_register(function ($class) {// Регистрирует заданную функцию в качестве реализации метода __autoload().
 //debug($class);
  //echo '<br>';
    $path = str_replace('\\','/',$class.'.php');//Заменяет обратные слеши на нормальные у объекта $class
//var_dump( $path); смотрим подключение классов
  if (file_exists($path)){//проверяем на наличие файла если существует подключаем
  require $path;
  }else{
      echo 'Нет класса';
  }
});


session_start();//стартуем сеесию


$router = new Router;//запускаем роутер
$router->run();

