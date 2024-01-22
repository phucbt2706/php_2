<?php
namespace App\Models;

use App\Interfaces\ModelInterfaces;

class BaseModel implements ModelInterfaces{
    protected $table;
    public function __construct($table){
        $this->table = $table;
    }

    public function create(){

    }

    public function read($id){

    }

    public function update($id, $data){

    }
    public function delete($id){

    }
    public function getAll(){

    }
    public function getOne($id, $condition=[]){
        echo "Get one $id <br>";
        echo $this->table;
    }
}