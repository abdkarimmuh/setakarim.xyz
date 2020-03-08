<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = ['name', 'percent','desc', 'status', 'created_at', 'updated_at'];
}
