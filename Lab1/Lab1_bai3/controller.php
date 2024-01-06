<?php
include 'model.php';

$user_name = $_POST['username'] ?? '';
$user = getUser($user_name );

include 'view.php';
?>

