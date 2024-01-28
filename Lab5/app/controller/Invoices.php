<?php

namespace app\controller;

class Invoices
{
    public function index():string{
        return 'invoice';
    }

    public function create(): string{
        return 'Create invoice';
}
}