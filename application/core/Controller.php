<?php
namespace application\core;


abstract class Controller {
public $id;
    public function __construct($route) {
        $this->route = $route;

        /*if (!$this->checkAcl()) {
            View::errorCode(403);
        }*/
        $this->view = new View($route);
        //$this->model = $this->loadModel($route['controller']);
    }
}