<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    protected $fillable = [
        'proposer',
        'isps_scope',
        'isps_content',
        'isps_from',
        'isps_to',
        'isps_remaks',
        'special_scope',
        'special_content',
        'special_from',
        'special_to',
        'special_remaks',
        'smt1_scope',
        'smt1_content',
        'smt1_from',
        'smt1_to',
        'smt1_remaks',
        'smt2_scope',
        'smt2_content',
        'smt2_from',
        'smt2_to',
        'smt2_remaks',
        'siap_scope',
        'siap_content',
        'siap_from',
        'siap_to',
        'siap_remaks',
        'status'
    ];

    public function getFillable()
    {
        return $this->fillable;
    }
    //
}
