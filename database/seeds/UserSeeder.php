<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'supv',
            'password' => '11111',
            'status' => 'Full Access',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        DB::table('users')->insert([
            'username' => 'ktt',
            'password' => '11111',
            'status' => 'Full Limit Access',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        DB::table('users')->insert([
            'username' => 'mitra',
            'password' => '11111',
            'status' => 'Limit Access',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        //
        //
    }
}
