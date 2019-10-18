<?php

require_once '../vendor/autoload.php';

$object = new App\Wcs\Hello();

echo $object->talk();
echo '<br>';
$object2 = new \HelloWorld\SayHello();
echo $object2->world();