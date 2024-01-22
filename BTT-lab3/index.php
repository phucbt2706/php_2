<?php
require_once 'vendor/autoload.php';

use App\Models\User;

$user = new User('user');

$user->getOne('1','');

