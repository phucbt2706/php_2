<?php
namespace app\Core;

 use mysqli;

class Database{
    public function connect(){

        try {
            $servername = "http://localhost:8080/";
            $username = "root";
            $password = "mysql";
            $dbname = "e-hospital";

               $conn = new mysqli($servername, $username, $password,$dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            return $conn;
        } catch (\Exception  $e) {
            echo "Exceptionaaaa";
            die();
        }
    }

}