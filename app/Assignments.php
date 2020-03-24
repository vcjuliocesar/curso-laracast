<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    public function completed()
    {
      $this->completed = true;
      $this->save();
    }
}
