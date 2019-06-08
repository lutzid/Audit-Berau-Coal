<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
