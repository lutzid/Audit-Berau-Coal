<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertUser($nm, $usr, $pw, $pm, $stt) {
    DB::table('users')->insert([
        'name' => $nm,
        'username' => $usr,
        'password' => $pw,
        'permit' => $pm,
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
        insertUser('Anisa Nanhidayah', 'anisa', '123456', 1, 'Audit Supervisor'); 
        insertUser('Ryandi Hermawan', 'ryandi', '123456', 0, 'Audit Supervisor'); 
        insertUser('Ezra Boron', 'ezra', '123456', 1, 'Audit Superintendent'); 
        insertUser('Andhi H', 'andhi', '123456', 1, 'Audit Superintendent'); 
        insertUser('Emyliana M', 'emy', '123456', 0, 'Audit Superintendent'); 
        insertUser('Suhendrawan', 'suhendra', '123456', 0, 'Audit Superintendent'); 
        insertUser('Charles S', 'charles', '123456', 0, 'Audit Superintendent');
        insertUser('Luhut Lumban Raja', 'luhut', '123456', 0, 'Audit Manager');
        insertUser('Haris Wiyono', 'haris', '123456', 0, 'Audit General Manager');
        insertUser('Feri Indrayana', 'feri', '123456', 0, 'Kepala Teknik Tambang');
        insertUser('Yombi Gautama', 'yombi', '123456', 0, 'Wakil Kepala Teknik Tambang');
        insertUser('Sutami Sitorus', 'sutami', '123456', 0, 'Wakil Kepala Teknik Tambang');
        insertUser('Bobby Riyanto', 'bobby', '123456', 0, 'Wakil Kepala Teknik Tambang');
        insertUser('Traju AA', 'traju', '123456', 0, 'Auditor');
        insertUser('Hendrianto Tan', 'hendri', '123456', 0, 'Auditor');
        //
    }
}
