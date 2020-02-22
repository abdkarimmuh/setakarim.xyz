<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['name', 'desc', 'file', 'phone', 'mail', 'address', 'created_at', 'updated_at'];
}
