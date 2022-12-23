<?php

namespace App\Models;

use CodeIgniter\Model;

class LuaranModel extends Model
{
    protected $table      = 'luaran_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen','kd_tridharma','judul','link','sumber','dana','skala','tahun','file'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    
    

}