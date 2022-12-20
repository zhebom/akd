<?php

namespace App\Models;

use CodeIgniter\Model;

class RekognisiModel extends Model
{
    protected $table      = 'rekognisi_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen','kd_tridharma','rekognisi','oleh','skala','file','tahun'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    
    

}