<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name', 'desc', 'remarks', 'file', 'created_at', 'updated_at'];
}
