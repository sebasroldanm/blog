<?php

use App\User;
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
    	$id_description_query = DB::select('SELECT id FROM descriptions WHERE title = ?', ['Creador']);


        User::create([
        	'name' => 'Juan Carlos',
        	'description_id' => $id_description_query[0]->id,
        	'email' => 'juan@app.com',
        	'password' => bcrypt('123'),
        ]);
    }
}
