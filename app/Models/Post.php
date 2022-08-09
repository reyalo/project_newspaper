<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['view_count'];







    //for comment showing
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
