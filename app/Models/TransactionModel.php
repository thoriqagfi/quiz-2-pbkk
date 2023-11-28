<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
  protected $table = 'transaction';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user_id', 'movie_cinema_id', 'method', 'email', 'cardholder', 'card_number', 'date', 'cvv', 'status', 'seat', 'amount'];

  public function getTransaction($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('transaction')->like('user_id', $keyword)->orLike('movie_cinema_id', $keyword)->orLike('seat', $keyword)->orLike('price', $keyword);
  }
}
