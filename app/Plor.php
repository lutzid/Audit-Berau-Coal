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
        'object',
        'category',
        'smkp',
        'smk3',
        'ohsas',
        'iso',
        'begems',
        'approver',
        'status1',
        'type',
        'root',
        'corrective',
        'due_date1',
        'pj1',
        'eviden',
        'preventive',
        'due_date2',
        'pj2',
        'status2',
        'expired',
        'reason',
        'note',
        'statusFinal'
    ];

    protected $plorr = [
        // 'proposer',
        'no_nc',
        'audit_period',
        'depcont',
        'site',
        'date',
        'problem',
        'location',
        'object',
        'category',
        'smkp',
        'smk3',
        'ohsas',
        'iso',
        'begems',
        'approver'
        // 'status1'
    ];
    
    public function getFillable()
    {
        return $this->fillable;
    }

    public function getFirst()
    {
        return $this->plorr;
    }
    //
}
