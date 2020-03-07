<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AchievementOrganization extends Model
{
    protected $table = 'achievement_organization';
    protected $fillable = ['title', 'name', 'year', 'file', 'status', 'created_at', 'updated_at'];
}
