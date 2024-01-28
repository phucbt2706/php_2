<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

use app\Core\Route;

$route = new Route();

$route->get('/',[\app\controller\Home::class, 'index']);
$route->post('/upload',[\app\controller\Home::class, 'upload']);

$route->get('/login',[\app\model\Login::class, 'login']);
$route->post('/login',[\app\model\Login::class, 'loginHandle']);
$route->get('/logout',[\app\model\Login::class, 'logout']);

$route->get('/register',[\app\model\Login::class, 'register']);

echo $route->resolved($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']) );