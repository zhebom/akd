<?php

namespace App\Models;

use CodeIgniter\Model;

class DataLuaranModel extends Model
{
    protected $table      = 'kode_luaran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
   
    protected $allowedFields = ['nama_luaran'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

}