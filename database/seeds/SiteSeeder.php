<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertSite($site) {
    DB::table('sites')->insert([
        'name' => $site,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertSite('Office');
        insertSite('Binungan Mining Operation 1');
        insertSite('Binungan Mining Operation 2');
        insertSite('Lati Mining Operation');
        insertSite('Sambarata Mining Operation');
        insertSite('Shipping');
        insertSite('Eksplorasi');
        //
    }
}
