<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $gaurded=['id'];
    protected $fillable = ['name'];
}
