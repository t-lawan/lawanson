<?php

namespace App;
use App\Experience;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    //
    public function experience()
    {
      return $this->belongsTo(Experience::class);
    }
}
