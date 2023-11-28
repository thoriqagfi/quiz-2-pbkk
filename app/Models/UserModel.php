<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'user';
  protected $primaryKey = 'id';
  protected $allowedFields = ['username', 'password', 'email', 'name', 'role'];
  protected $returnType = 'App\Entities\User';
  protected $useTimestamps = true;
  protected $useSoftDeletes = true;
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';
}