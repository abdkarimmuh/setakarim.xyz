<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';
    protected $fillable = ['name', 'desc', 'file', 'status', 'created_at', 'updated_at'];
}
