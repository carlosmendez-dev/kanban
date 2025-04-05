<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Board;
use App\Models\User;
use App\Models\Tag;

class Task extends Model
{
    protected $with = [];
    public function board(){ return $this->belongsTo(Board::class);}
    public function user(){ return $this->belongsTo(User::class);}
    public function tag(){ return $this->belongsTo(Tag::class);}
}
