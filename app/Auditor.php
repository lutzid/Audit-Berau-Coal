<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditor extends Model
{
    protected $table = 'auditors';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
