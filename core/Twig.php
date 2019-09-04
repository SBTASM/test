<?php

namespace core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


/**
 * Trait Twig
 * @package core
 *
 * @property Environment $twig
 */
trait Twig{
    private $twig;

    protected function render(string $file, array $params = []){
        $this->init();
        $file = implode('.', [$file, \config\Twig::EXT]);
        return $this->twig->render($file, $params);
    }

    private function init(){
        $path = $this->viewsPath ?? implode(DIRECTORY_SEPARATOR, [__DIR__, '..',  \config\Twig::VIEWS_PATH]);
        $cache = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', \config\Twig::CACHE]);
        $loader = new FilesystemLoader($path);
        $this->twig = new Environment($loader, ['debug' => \config\Twig::DEBUG, 'cache' => $cache]);
    }
}