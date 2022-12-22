<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table      = 'laporan_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen','kd_tridharma','judul','sumber','dana','skala','tahun','file','tahun'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    
    

}