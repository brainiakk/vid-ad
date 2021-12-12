<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'parent_id'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function video()
    {
        return $this->hasMany('App\Models\VideoContent');
    }

    public function topics()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function parent_category()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
}
