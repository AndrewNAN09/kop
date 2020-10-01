<?php

ini_set('display_errors',1);//включить вывод ошибок на экран 1 это включино
error_reporting(E_ALL);//активируем отчет об ошибках все ошибки

function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}