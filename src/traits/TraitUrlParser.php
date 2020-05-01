<?php

namespace Src\Traits;

trait TraitUrlParser{

    #Divide um url em um array 
    public function parseUrl()
    {
        return explode("/", rtrim($_GET['url']),FILTER_SANITIZE_URL);
    }

}