<?php

namespace core;

class Controller{

    protected $get, $post;
    public function __construct($get, $post)
    {
        $this->get = $get;
        $this->post = $post;
    }

    public function getIsPost(){
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    use Twig;
}