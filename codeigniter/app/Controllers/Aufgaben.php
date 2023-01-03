<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function getindex()
    {
        $data['title']='Aufgaben';
        echo view('templates/Header',$data);
        echo view ('templates/Menue');
        echo view('Aufgaben/Aufgaben');
        echo view ('templates/Footer');
    }
}