<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertUser($nm, $usr, $pw, $stt) {
    DB::table('users')->insert([
        'name' => $nm,
        'username' => $usr,
        'password' => $pw,
        'status' => $stt,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        insertUser('Anisa NH', 'anisa', '123456', 'Audit Supervisor'); 
        insertUser('Ryandi H', 'ryandi', '123456', 'Audit Supervisor'); 
        insertUser('Ezra Boron', 'ezra', '123456', 'Audit Superintendent'); 
        insertUser('Andhi H', 'andhi', '123456', 'Audit Superintendent'); 
        insertUser('Emy M', 'emy', '123456', 'Audit Superintendent'); 
        insertUser('Suhendrawan', 'suhendra', '123456', 'Audit Superintendent'); 
        insertUser('Charles S', 'charles', '123456', 'Audit Superintendent');
        //
    }
}
