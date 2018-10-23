<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'img_url', 'title',
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return  $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return  $this->hasMany(Rating::class);
    }
}
