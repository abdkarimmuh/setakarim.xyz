<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    //With Tag
    // protected $fillable = ['title', 'body', 'file', 'category_id', 'tag_id', 'created_at', 'updated_at'];
    //Without Tag
    protected $fillable = ['title', 'body', 'file', 'category_id', 'created_at', 'updated_at'];

    protected $appends = ['category_name', 'date'];

    public function Category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function getCategoryNameAttribute()
    {
        return isset($this->Category) ? $this->Category->name : '';
    }

    public function getDateAttribute()
    {
        return isset($this->created_at) ? $this->created_at->formatLocalized('%d %B %Y') : '';
    }
}
