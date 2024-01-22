<?php
namespace app\Core;

use mysqli;

class Database{
    public function __construct(){ 
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        $conn = new mysqli($servername, $username, $password);

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully <br>";
    }

    public function HelloWorld(){
        echo "Hello World <br>";
    }
}