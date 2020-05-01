<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender{

    public function __construct( )
    {
        $this->setTitle("Página Inicial");
        $this->setDescription("Esse é o meu site de MVC");
        $this->setKeywords("MVC, Ermeson Oliveira");
        $this->setDir("home/");
        $this->renderLayout();
    }
}