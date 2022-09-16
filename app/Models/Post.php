<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_title',
        'content',
        'status',
        'author_id',
        'publish_date',
    ];
    public function author(){
        return $this->belongsTo(App\Models\Author::class, 'author_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post');
    }



}
