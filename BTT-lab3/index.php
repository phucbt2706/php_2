<?php
require_once 'vendor/autoload.php';

use App\Models\User;

$user = new User('user');

echo "Table name is: " . $user->table ."<br>";

$user->create();
$user->read(1);
$user->update(2,'');
$user->delete(3);
$user->getAll();
$user->getOne(4);

