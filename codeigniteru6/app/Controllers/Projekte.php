<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function getindex()
    {
        $data['title']='Projekte';
        echo view('templates/Header',$data);
        echo view ('templates/Menue');
        echo view('Projekte/Projekte');
        echo view ('templates/Footer');
    }
}