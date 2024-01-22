<?php
namespace App\Models;

use App\Interfaces\ModelInterfaces;

class BaseModel implements ModelInterfaces{
    public $table;
    public function __construct($table){
        $this->table = $table;
    }

    public function create(){
        echo "Create <br>";
    }

    public function read($id){
    echo "Read id = $id <br>";
    }

    public function update($id, $data){
        echo "Update where id = $id <br>";
    }
    public function delete($id){
        echo "Delete id= $id <br>";
    }
    public function getAll(){
        echo "GetAll <br>";
    }
    public function getOne($id, $condition=[]){
        echo "Get one $id <br>";
    }
}