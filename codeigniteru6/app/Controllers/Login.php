<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MitgliederModel;

class Login extends BaseController
{
    public function __construct() {

        $this->MitgliederModel = new MitgliederModel();

    }
    public function getindex()
    {
        if (isset($_POST['pw']) && isset($_POST['email'])) {
            if ($this->MitgliederModel->login() != NULL) {
                $passwort = $this->MitgliederModel->login()['pw'];

                if (password_verify($_POST['pw'], $passwort)) {
                    $this->session->set('loggedin', TRUE);
                    return redirect()->to(base_url() . 'Aktuelle_Projekte');
                }
            }
        }
        $data['title'] = 'Login';
        echo view('templates/Header', $data);
        echo view('Login');
        echo view('templates/Footer');
    }
    public function index()
    {
        if (isset($_POST['pw']) && isset($_POST['email'])) {
            if ($this->MitgliederModel->login() != NULL) {
                $passwort = $this->MitgliederModel->login()['pw'];

                if (password_verify($_POST['pw'], $passwort)) {
                    $this->session->set('loggedin', TRUE);
                    return redirect()->to(base_url() . 'Aktuelle_Projekte');
                }
            }
        }
        $data['title'] = 'Login';
        echo view('templates/Header', $data);
        echo view('Login');
        echo view('templates/Footer');
    }
}
