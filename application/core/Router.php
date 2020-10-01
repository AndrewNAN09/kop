<?php
namespace application\core;
//use application\core\View;//так как мы используем сдес класс Вью

class Router{
   
    protected $routes = [];//массив с маршрутами
    protected $params = [];//массив с ключами
    
    public function __construct(){ //метод считывает маршруты и передает в метод add

        $arr = require 'application/config/routes.php';
        //debug($arr);//просматриваем наш массив из маршрутов
        foreach ($arr as $key=>$val){//перебираем массив и записаваем ключь и значение
        //var_dump($key);
        //var_dump($val);
       
        $this->add($key, $val);//передаем ключ и значение в метод add ниже
        }
    }
    
    
    public function add($route, $params){//функция на добавление маршрута
        //debug($params);
        $route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);//можно добавлять после / в урл
        $route='#^'.$route.'$#';//добавили эти символы для перевели ключи в регулярные выражения
        $this->routes[$route]=$params;//передали ключу параметры
        //var_dump($this->routes[$route]);
        

    }

    
    public function run(){
   if ($this->match()){//если есть совпадение по строке и маршруту то вернуло тру то
            //echo '<br>';echo '<br>';
            //debug($this->params);
       //$path - это местонахождение класса с его имя
            $path='application\controllers\\'. ucfirst($this->params['controller']). 'Controller';//ucfirst елает первую букву заглавной прописали нахождение класса
            //echo $path;
            if(class_exists($path)){///проверяем на наличее класса

                // $action это наш метод к примеру indexAction
                $action = $this->params['action'].'Action';//передаем метод//params['action'] название нашего метода

                //echo $action;//echo '<br>';
                //var_dump($this->params);
                if (method_exists($path, $action)){//проверяем на наличие методда $action в классе $path если есть создаем объект
                    $controller = new $path($this->params); //создаем объект
                    $controller->$action();//запускаем метод $action()
                }else{
                    //View::errorCode(404);
                    echo "Метод не нейден" . $action;
                }
            }else{
                echo '<br>';
                //View::errorCode(404);
                echo 'Класс Не найден'.": ".$path;
                //$action = ucfirst($this->params['action']).'Action';
                //echo '<br>'; //echo $action;
            }
            //echo '<p>controller: <b>' . $this->params['controller'] . '</b><p>';
            //echo '<p>controller: <b>' . $this->params['action'] . '</b><p>';
        }else{
            //View::errorCode(404);
            echo 'Маршрут не найден';
        }
        //echo "Start";
    }


    public function match(){
        $url = trim($_SERVER['REQUEST_URI'],'/'); //получаем текущий  урл с помощью trim удаляем из адреса слеш '/'
        //var_dump($url);
        foreach ($this->routes as $route=>$params){//перебираем массив и получаем роутс и параметры
            //var_dump($route);
            //var_dump($params);
            if (preg_match($route, $url, $matches)){//preg_match — Выполняет проверку на соответствие регулярному выражению /pattern Искомый шаблон в виде строки/subject - Входная строка.
                //echo 'покажем что совпало';
                //var_dump($matches);//покажет, что совпало
                $this->params=$params;
                //var_dump($this->params);
                return true;
            }
        }
        return false;
    }
        
    }
