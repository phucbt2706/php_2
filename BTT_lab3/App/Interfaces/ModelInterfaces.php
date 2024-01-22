<?php
namespace App\Interfaces;

interface ModelInterfaces{
    public function create();
    public function read($id);
    public function update($id, $data);
    public function delete($id);
    public function getAll();
    public function getOne($id, $condition);
}