<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertAuditor($aud) {
    DB::table('auditors')->insert([
        'name' => $aud,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class AuditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertAuditor('Luhut Lumban Raja');
        insertAuditor('Traju AA');
        insertAuditor('Hendrianto Tan');
        insertAuditor('Ezra Boron');
        insertAuditor('Andhi HP');
        insertAuditor('Emyliana M');
        insertAuditor('Charles S');
        insertAuditor('Suhendrawan');
        insertAuditor('Ryandi Hermawan');
        insertAuditor('Anisa Nanhidayah');
        //
    }
}
