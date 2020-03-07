<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SlugWork extends Model
{
    protected $table = 'slug_work';
    protected $fillable = ['slug', 'name', 'created_at', 'updated_at'];
}
