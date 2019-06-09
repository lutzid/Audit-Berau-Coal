<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plor extends Model
{
    protected $fillable = [
        'proposer',
        'no_nc',
        'audit_period',
        'depcont',
        'site',
        'date',
        'auditor',
        'problem',
        'location',
        'category',
        'smkp',
        'smk3',
        'ohsas',
        'iso',
        'begems',
        'approver',
        'status'
    ];
    
    public function getFillable()
    {
        return $this->fillable;
    }
    //
}
