<?php
//Bài 1: Kết nối Database
namespace Core;

use mysqli;

class Database{
    public function __construct(){ 
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully <br>";
    }

    public function HelloWorld(){
        echo "Hello World <br>";
    }
}