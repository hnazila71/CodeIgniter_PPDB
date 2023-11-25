<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('daftar');
    }
    public function hello(): string
    {
        return view('hello');
    }
}