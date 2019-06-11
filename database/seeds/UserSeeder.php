<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertUser($nm, $usr, $pw, $pm, $sp, $stt) {
    DB::table('users')->insert([
        'name' => $nm,
        'username' => $usr,
        'password' => $pw,
        'permit' => $pm,
        'special' => $sp,
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
        insertUser('Anisa Nanhidayah', 'anisa', '123456', 1, 1, 'Audit Supervisor'); 
        insertUser('Ryandi Hermawan', 'ryandi', '123456', 0, 1, 'Audit Supervisor'); 
        insertUser('Ezra Boron', 'ezra', '123456', 1, 1, 'Audit Superintendent'); 
        insertUser('Andhi H', 'andhi', '123456', 1, 1, 'Audit Superintendent'); 
        insertUser('Emyliana M', 'emy', '123456', 0, 1, 'Audit Superintendent'); 
        insertUser('Suhendrawan', 'suhendra', '123456', 0, 1, 'Audit Superintendent'); 
        insertUser('Charles S', 'charles', '123456', 0, 1, 'Audit Superintendent');
        insertUser('Luhut Lumban Raja', 'luhut', '123456', 0, 1, 'Audit Manager');
        insertUser('Haris Wiyono', 'haris', '123456', 0, 1, 'Audit General Manager');
        insertUser('Feri Indrayana', 'feri', '123456', 0, 1, 'Kepala Teknik Tambang');
        insertUser('Yombi Gautama', 'yombi', '123456', 0, 1, 'Wakil Kepala Teknik Tambang');
        insertUser('Sutami Sitorus', 'sutami', '123456', 0, 1, 'Wakil Kepala Teknik Tambang');
        insertUser('Bobby Riyanto', 'bobby', '123456', 0, 1, 'Wakil Kepala Teknik Tambang');
        insertUser('Traju AA', 'traju', '123456', 0, 1, 'Auditor');
        insertUser('Hendrianto Tan', 'hendri', '123456', 0, 1, 'Auditor');
        insertUser('Penanggung Jawab Operasi', 'pjo', '123456', 0, 0, 'Auditee');
        insertUser('Department Head', 'depthead', '123456', 0, 0, 'Auditee');
        insertUser('Section Head', 'secthead', '123456', 0, 0, 'Auditee');
        insertUser('Safety Contractor', 'safety', '123456', 0, 0, 'Auditee');
        insertUser('General User', 'umum', '123456', 0, 0, 'General User');
        //
    }
}
