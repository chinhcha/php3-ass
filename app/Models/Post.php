<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'views',
        'image',
        'author',
        'category_id',

    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {

            $slug = \Str::slug($post->title, '-');


            $originalSlug = $slug;
            $counter = 1;
            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter++;
            }

            $post->slug = $slug;
        });
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //   public function tags(){
    //     return $this->belongsToMany(Tag::class);
    //   }
}
