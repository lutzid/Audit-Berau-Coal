<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agendas';
    protected $fillable = ['proposer', 'depcont', 'site', 'scope', 'auditee', 'auditor', 'from', 'to', 'approver', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    //
}
