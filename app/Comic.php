<?php

namespace App;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'author',
        'price',
        'genre',
        'description',
        'photo',
        
    ];
}
