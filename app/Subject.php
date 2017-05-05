<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Institution;
class Subject extends Model
{
    //
    protected $fillable = array('name','grade');

    public function institution()
    {
      return $this->belongsTo(Institution::class);
    }

}
