<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertAuditee($audi) {
    DB::table('auditees')->insert([
        'name' => $audi,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class AuditeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertAuditee('PJO');
        insertAuditee('Dept Head');
        insertAuditee('Section Head');
        insertAuditee('Safety Contractor');
        //
    }
}
