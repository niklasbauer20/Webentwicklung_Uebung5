<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function getindex()
    {
        $data['title']='Reiter';
        echo view('templates/Header',$data);
        echo view ('templates/Menue');
        echo view('Reiter/Reiter');
        echo view ('templates/Footer');
    }
}
{

}