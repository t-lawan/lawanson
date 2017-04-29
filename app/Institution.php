<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $fillable = array('name','degree','city','start_date','end_date');

    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
