<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertCategory($cat) {
    DB::table('categories')->insert([
        'name' => $cat,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertCategory('Kesesuaian');
        insertCategory('Observasi');
        insertCategory('Minor');
        insertCategory('Mayor');
        insertCategory('Kritikal');
        //
    }
}
