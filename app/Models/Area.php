<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Area extends Model
{
  protected $table = 'area';

  public function users()
  {
    return $this -> hasMany(User::class);
  }
}
