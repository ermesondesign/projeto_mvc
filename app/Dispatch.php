<?php

namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes{

    #Atributos
    private $Method;
    private $Param=[];
    private $Obj;

    protected function getMethod(){ return $this->Method; }
    public function setMethod($Method){ $this->Method = $Method; }
    protected function getParam(){ return $this->Param; }
    public function setParam($Param){ $this->Param = $Param; }

    #Método Contrutor
    public function __construct()
    {
        self:: addController();
    }

    #Método de Adição do Controller 
    private function addController()
    {
        $RotaController = $this-> getRota();
        $NameS = "app\\Controller\\{$RotaController}"; 
        $this -> Obj = new $NameS;

        if (isset($this->parseUrl ()[1])){
            self:: addMethod();
        }
        #Obj = new App\Controller\ControllerSitemap;
    }

    #Método de Adição do Método Controller
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl () [1])){
            $this->setMethod("{$this->parseUrl()[1]}");
            call_user_func_array([$this->Obj,$this->getMethod], $this->getParam());
        }
    }

    #Método de Adição de Parâmetros do Controller
    private function addParam()
    {
        if ($ContArray > 2){
            foreach($this->parseUrl() as $Key => Value) {
                if($Key > 1){
                    $this->setParam($this->Param += [$key => $Value]);
                }
            }

            var_dump($this->getParam());
        }
    }


}