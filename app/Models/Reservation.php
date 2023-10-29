<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function user()
{
    return $this->belongsTo('App\Models\User','user_id');
}

public function film()
{
    return $this->belongsTo('App\Models\Film','film_id');
}
}
