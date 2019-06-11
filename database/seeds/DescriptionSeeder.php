<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('description')->insert([
        	'title' => 'Creador',
        ]);
        DB::table('description')->insert([
        	'title' => 'Inovador',
        ]);
        DB::table('description')->insert([
        	'title' => 'Empírico',
        ]);
    }
}
