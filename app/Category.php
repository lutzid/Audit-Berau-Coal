<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
