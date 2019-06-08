<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sites';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
