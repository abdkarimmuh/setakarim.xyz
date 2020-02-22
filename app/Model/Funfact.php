<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Funfact extends Model
{
    protected $table = 'funfacts';
    protected $fillable = ['name', 'count', 'icon', 'created_at', 'updated_at'];
}
