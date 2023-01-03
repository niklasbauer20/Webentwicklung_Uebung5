<?php
namespace App\Models;
use CodeIgniter\Model;

class MitgliederModel extends Model
{
    public function login(){
        $this->personen= $this->db->table('mitglieder');
        $this->personen->select('passwort');
        $this->personen->where('mitglieder.username', $_POST['email']);
        $result= $this->personen->get();

        return $result->getRowArray();
    }


 public function getData(){
     $result= $this->db->query('SELECT * FROM mitglieder ORDER BY username');
     return $result->getResultArray();
 }
}