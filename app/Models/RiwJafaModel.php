<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwJafaModel extends Model
{
    protected $table      = 'riwjafa_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen','jafa_dosen','tahun','file'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

}