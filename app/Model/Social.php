<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';
    protected $fillable = ['name', 'address', 'icon', 'created_at', 'updated_at'];
}
