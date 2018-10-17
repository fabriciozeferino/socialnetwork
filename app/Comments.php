<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'comment',
    ];

    public function user()
    {
        $this->belongTo(User::class);
    }

    public function post()
    {
        $this->belongTo(Post::class);
    }
}
