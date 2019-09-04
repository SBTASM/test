<?php

namespace core;

use config\App;
use config\DB;
use exceptions\FileNotFoundException;
use exceptions\NotFoundException;

class Application{

    private $config;

    public function __construct()
    {
        $this->config = [
            'DB' => [
                'NAME' => DB::DB_HOST,
                'PASSWORD' => DB::DB_PASS,
                'USER' => DB::DB_LOGIN,
                'HOST' => DB::DB_HOST
            ],
            'APP' => [],
            'TWIG' => [],
        ];
    }

    public function __toString()
    {
        return $this->run();
    }

    /**
     * @return string
     */
    protected function run(){
        $route = $_GET['r'] ?? implode('/', [App::DEFAULT_CONTROLLER, App::DEFAULT_ACTION]);

        try{
            $data = $this->parse($route);
        }catch (NotFoundException $exception){
            return (string)$exception;
        }

        $controller = $data['controller'];
        $controller = new $controller($_GET, $_POST);

        $action = $data['action'];
        $data = null;

        try{
            $data = $controller->$action();
        }catch (Exception $exception){
            return (string)$exception;
        }

        return $data;
    }

    use Router, Twig;
}