<?php

namespace Modules\Blog\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\BlogFactory;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

     protected $connection = 'mysql_second';

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    protected static function newFactory(): BlogFactory
    {
        //return BlogFactory::new();
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
