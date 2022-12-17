<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwPendModel extends Model
{
    protected $table      = 'riwpendidikan_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen', 'universitas','tahun','file','jurusan','tingkat'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

}