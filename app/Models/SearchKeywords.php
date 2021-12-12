<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchKeywords extends Model
{
    use HasFactory;

    protected $table = 'search_keywords';
    protected $casts = ['keywords'=>'array'];
}