<?php

namespace App\Models;

use CodeIgniter\Model;

class CinemaModel extends Model
{
  protected $table = 'cinema';
  protected $primaryKey = 'id';
  protected $allowedFields = ['name', 'address', 'capacity', 'price'];
  protected $returnType = 'App\Entities\Cinema';
  protected $useTimestamps = true;
  protected $useSoftDeletes = true;
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  public function getCinema($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('cinema')->like('name', $keyword)->orLike('address', $keyword);
  }
}