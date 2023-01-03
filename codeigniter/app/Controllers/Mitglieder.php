<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function getindex(){

        $data['mitglieder']= array(
                                array(
                                    'Name'=>'Max Mustermann',
                                    'E-Mail'=>'max@mustermann.de'),
                                array(
                                    'Name'=>'Petra Müller',
                                    'E-Mail'=>'petra@mueller.de')
                                );

        $data['title']='Mitglieder';
        echo view('templates/Header',$data);
        echo view ('templates/Menue');
        echo view('Mitglieder/Mitglieder', $data);
        echo view ('templates/Footer');
    }
}