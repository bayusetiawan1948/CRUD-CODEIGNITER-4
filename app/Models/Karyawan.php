<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan extends Model
{
  protected $table      = 'tbl_karyawan';
  protected $primaryKey = 'nik';

  protected $useAutoIncrement = false;

  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = [
    'nik',
    'nama',
    'jenkel',
    'tempat_lahir',
    'tgl_lahir',
    'alamat'
  ];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
