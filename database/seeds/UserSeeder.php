<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$id_description_query = DB::select('SELECT id FROM description WHERE title = ?', ['Creador']);


        DB::table('users')->insert([
        	'name' => 'Juan Carlos',
        	'description_id' => $id_description_query[0]->id,
        	'email' => 'juan@app.com',
        	'password' => bcrypt('123'),
        ]);
    }
}
