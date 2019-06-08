<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditee extends Model
{
    protected $table = 'auditees';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
