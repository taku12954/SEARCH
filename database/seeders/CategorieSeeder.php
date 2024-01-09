<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'title' => '映像機材',
         ]);
    
        DB::table('categories')->insert([
                'title' => '音響機材',
         ]);
         
         DB::table('categories')->insert([
                'title' => 'その他の主な機材',
         ]);
    }
}

