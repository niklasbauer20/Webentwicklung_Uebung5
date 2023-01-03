<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['title']='Login';
        echo view('templates/Header',$data);
        echo view('Login');
        echo view ('templates/Footer');
    }
}