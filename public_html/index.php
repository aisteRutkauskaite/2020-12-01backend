<?php
use App\App;

require '../bootloader.php';

//$controller= new HomeController();
//print $controller->index();

$app = new App();
$app->run();