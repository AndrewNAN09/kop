<?php
namespace application\core;

class View
{
    public $path;// это местонахождение класса к примеру 'main/index'
    public $route;//это массив с контроллером и методом
    public $layout;//это шаблон то что до body ит то что после


    public function __construct($route)
    {
        $this->route = $route;

        //echo 'Клас Viws Подключен' . '<br>';
        $this->path = $route['controller'] . "/" . $route['action'];
        if($route['controller']=="admin"){
            $this->layout = 'admin';
        }else{
            $this->layout = 'default';
        }
        //debug($this->path);
        //debug($this->layout);

    }

    public function render($title, $name, $c,$v){//данный метод загружает сам шаблон и наш вид
        //extract($vars);//распакует наш массив в переменные с названиями ключей
        ob_start();//включает буферизацию вывода.
        if (file_exists('application/views/' . $this->path . ".php")) {//осуществляем проверку на существование файла
            require 'application/views/' . $this->path . ".php";//
            $content = ob_get_clean();// Получает текущее содержимое буфера и очищает текущий буфер вывода.

           //$content = ob_get_clean(); //так пусто потомучто отчистили буфер
            require 'application/views/layouts/' . $this->layout . ".php";//подгружаем фал Дефаулт.пхп
            //var_dump($this->path);
        } else {
            echo "Вид не найден: " . $this->path;
        }
    }
    public function redirect($url)
    {//метод редирект
        header('location: /' . $url);
        exit;
    }
    public function jeison($status, $message, $url){
    exit(json_encode(['status' => $status, 'message' => $message, 'url' => $url]));//json_encode - принимает масиив возвращает строку
    }
    public function jeisonok($url){
        exit(json_encode(['url' => $url]));
    }

}
