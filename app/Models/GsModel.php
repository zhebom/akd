<?php

namespace App\Models;

use CodeIgniter\Model;

class GsModel extends Model
{
    protected $table      = 'gs_dosen';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_dosen', 'gs_dosen'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

}