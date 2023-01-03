<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class Mitglieder extends BaseController
{
    public function getindex(){
        $MitgliederModel= new MitgliederModel();
        $data['mitglieder']= $MitgliederModel->getData();

        $data['title']='Mitglieder';
        echo view('templates/Header',$data);
        echo view ('templates/Menue');
        echo view('Mitglieder/Mitglieder', $data);
        echo view ('templates/Footer');
    }
}