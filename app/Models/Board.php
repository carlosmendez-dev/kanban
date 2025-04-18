<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Board extends Model
{
    protected $with = ["user"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
