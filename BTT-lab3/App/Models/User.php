<?php
namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel{
    public function __construct($table){
        $this->table = $table;
    }
}