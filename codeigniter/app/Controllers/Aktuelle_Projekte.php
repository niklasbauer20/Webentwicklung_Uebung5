<?php

namespace App\Controllers;

class Aktuelle_Projekte extends BaseController
{
    public function getindex()
    {
        $data['title']='Aktuelle Projekte';
        echo view('templates/Header',$data);
        echo view ('templates/Menue');
        echo view('Aktuelle_Projekte/Aktuelle_Projekte');
        echo view ('templates/Footer');
    }
}