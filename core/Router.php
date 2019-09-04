<?php

namespace core;

use exceptions\NotFoundException;

/**
 * Very simple router.
 *
 * Trait Router
 * @package core
 */
trait Router{

    /**
     * Parse URI
     *
     * @param $route
     * @return array|bool
     */
    public function parse($route){
        $controller = null;
        $action = null;

        $data = explode('/', $route);

        $action = array_pop($data);
        $controller = array_pop($data);

        if($this->checkControllerClass($controller) === false || $this->checkAction($controller, $action) === false){
            throw new NotFoundException();
        }else{
            return ['controller' => $this->getClassByName($controller), 'action' => $action];
        }
    }

    /**
     * Check exist class.
     *
     * @param $controller_name
     * @return bool
     */
    private function checkControllerClass($controller_name){
        $class = $this->getClassByName($controller_name);
        return class_exists($class);
    }

    /**
     *Get controller class by controller name.
     *
     * @param $name string
     * @return string
     */
    private function getClassByName($name){
        return 'controllers\\' . ucfirst(strtolower($name)) . 'Controller';
    }

    /**
     * Get action method by name.
     *
     * @param $name
     * @return string
     */
    private function getActionByName($name){
        return strtolower(ucfirst($name));
    }


    /**
     * Check action.
     *
     * @param $controller
     * @param $action
     * @return bool
     */
    private function checkAction($controller, $action){
        if($this->checkControllerClass($controller) === false){
            return false;
        }

        $class = $this->getClassByName($controller);
        $object = new $class([], []);
        if($object instanceof Controller){
            return method_exists($object, $this->getActionByName($action));
        }else{
            return false;
        }
    }
}