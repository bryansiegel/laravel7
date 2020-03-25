<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // protected $fillable = ['title', 'excerpt', 'body'];

    protected $guarded = [];

    //User table
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
