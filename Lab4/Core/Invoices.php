<?php

namespace app\Core;

class Invoices
{
    public function index():string{
        return 'invoice';
    }

    public function create(): string{
        return 'Create invoice';
}
}