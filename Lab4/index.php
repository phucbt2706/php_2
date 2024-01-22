<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\Core\Route;


$route = new Route();
//Bai 3:
// $route->register('/',function(){
//     echo "Home page";
// });

//Bai 4:
$route->register('/',[\app\Core\Home::class, 'index']);
$route->register('/home',[\app\Core\Home::class, 'index']);

$route->register('/invoices',[\app\Core\Invoices::class, 'index']);
$route->register('/invoices/create',[\app\Core\Invoices::class, 'create']);

echo $route->resolved($_SERVER['REQUEST_URI']);