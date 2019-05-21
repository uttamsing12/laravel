<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';

    public $fillable =[
    	'name',
    	'price',
    	'author',
    	'description',
    ];

}
