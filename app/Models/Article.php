<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Inverse relantionship many to 1 (article-user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1 to many (article-comment)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //Relación de uno a muchos inversa (category-article)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
