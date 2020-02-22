<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['name', 'desc', 'icon', 'created_at', 'updated_at'];
}
