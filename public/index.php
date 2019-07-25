<?php 
require  '../vendor/autoload.php';

use App\wcs\Hello;
use Helloworld\SayHello;


$firstObjet=new Hello();
echo $firstObjet->talk() . "<br>";


$secondObject = new SayHello();
echo $secondObject->world();


