<?php

function getUser($user_name)
{
    include 'config.php';
    try {
        $query = "SELECT * FROM `users` WHERE username = '$user_name'";
        
        $statement = $pdo->query($query);
        
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return  $result;
    } catch (PDOException $e) {
        die("Lỗi truy vấn: " . $e->getMessage());
    }
}

?>