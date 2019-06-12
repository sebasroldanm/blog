<?php

use App\Models\Description;        //Se agrego para solo llamar Description para el create
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

        // DB::table('description')->insert([
        // 	'title' => 'Creador',
        // ]);

    	Description::create([
    		'title' => 'Creador',
    	]);
    	
        Description::create([
        	'title' => 'Inovador',
        ]);
        Description::create([
        	'title' => 'Empírico',
        ]);
    }
}
