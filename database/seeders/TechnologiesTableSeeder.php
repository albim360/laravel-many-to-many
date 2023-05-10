<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [       
            ['name' => 'css'],
            ['name' => 'js'],
            ['name' => 'vue'],
            ['name' => 'sql'],
            ['name' => 'php'],
            ['name' => 'laravel'],
        ];
    
        DB::table('technologies')->insert($technologies);
    }
}    
