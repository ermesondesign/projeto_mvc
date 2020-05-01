<?php
header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

$Dispatch = new App\Dispacth();
// use App\teste;
// $teste=new teste(); 

use Src\Classes\ClassRoutes;


$new=new ClassRoutes();
var_dump($new);

// class Teste{

//     use TraitUrlParser;

//     public function __construct()
//     {
//         $url=$this->parseUrl();
//         var_dump($url);
//     }
// }

// $new=new Teste();

?>

