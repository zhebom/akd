<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table      = 'dosen_febups';
    protected $primaryKey = 'id_dosen';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nama_dosen', 'email_dosen','pass_dosen','role_dosen','nidn_dosen'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}