<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name', 'created_at', 'updated_at'];
}
