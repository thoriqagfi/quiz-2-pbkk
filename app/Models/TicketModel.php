<?php

namespace App\Models;

use CodeIgniter\Model;

class Ticket extends Model
{
  protected $table = 'ticket';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user_id', 'movie_cinema_id' ,'seat', 'price'];
  protected $returnType = 'App\Entities\Ticket';
  protected $useTimestamps = true;
  protected $useSoftDeletes = true;
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  public function getTicket($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('ticket')->like('user_id', $keyword)->orLike('movie_cinema_id', $keyword)->orLike('seat', $keyword)->orLike('price', $keyword);
  }
}