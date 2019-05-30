<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'username' => 'supv',
            'password' => '11111',
            'status' => 'Full Access',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        DB::table('tests')->insert([
            'username' => 'ktt',
            'password' => '11111',
            'status' => 'Full Limit Access',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        DB::table('tests')->insert([
            'username' => 'mitra',
            'password' => '11111',
            'status' => 'Limit Access',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        //
    }
}
