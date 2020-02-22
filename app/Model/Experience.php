<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = ['name', 'year', 'desc', 'status', 'created_at', 'updated_at'];
}
