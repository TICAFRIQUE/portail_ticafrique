<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $fillable = ['nom', 'profession', 'note', 'message','photo'];
}
