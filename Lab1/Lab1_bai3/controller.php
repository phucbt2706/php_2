<?php
include 'model.php';

$user_name = $_POST['username'] ?? '';

$user = getUser($user_name);


if ($_POST['username'] =='') {
    echo 'Chưa nhập username!';
}else {
    if (!$user) {
        echo 'Không tồn tại username!';
    }
}
include 'view.php';
?>

