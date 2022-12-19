<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwProfesiModel extends Model
{
    protected $table      = 'riwprofesi_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen','penyelenggara','kompetensi','berlaku','skala','file'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    
    

}