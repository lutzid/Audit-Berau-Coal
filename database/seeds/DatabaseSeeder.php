<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AuditeeSeeder::class);
        $this->call(AuditorSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ContractorSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(SiteSeeder::class);
    }
}
