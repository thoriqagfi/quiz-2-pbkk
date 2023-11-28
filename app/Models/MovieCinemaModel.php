<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieCinemaModel extends Model
{
  protected $table = 'movie_cinema';
  protected $primaryKey = 'id';
  protected $allowedFields = ['movie_id', 'cinema_id', 'showtime'];
  protected $returnType = 'App\Entities\MovieCinema';
  protected $useTimestamps = true;
  protected $useSoftDeletes = true;
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  public function getMovieCinema($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('movie_cinema')->like('movie_id', $keyword)->orLike('cinema_id', $keyword)->orLike('showtime', $keyword);
  }
}