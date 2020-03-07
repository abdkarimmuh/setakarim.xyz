<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';
    protected $fillable = ['slug', 'name', 'desc', 'file', 'created_at', 'updated_at'];
}
