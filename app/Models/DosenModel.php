<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table      = 'dosen_febups';
    protected $primaryKey = 'id_dosen';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'email','pass','role'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}