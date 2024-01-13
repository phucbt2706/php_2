<?php
//Bài 2: Import bằng require '';
// require 'Core/Database.php';

//Bài 3: Import bằng hàm spl_autoload_register();
// spl_autoload_register(function($class){
//     include $class .'.php';
// });

//Bài 4: Import bằng Autoload
require_once __DIR__.'/vendor/autoload.php';

use Core\Database as DB;

$db = new DB();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Home page
</body>
</html>