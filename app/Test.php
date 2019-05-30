<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = ['username', 'password', 'status', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
