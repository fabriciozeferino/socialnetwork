<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
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
        return  $this->hasMany(Comments::class);
    }
}
