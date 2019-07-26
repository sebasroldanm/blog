<?php

use App\Models\User;
use App\Models\Description;
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
        $id_description_query = Description::where('title', 'Creador')->value('id');
        User::create([
            'name' => 'Juan Carlos',
            'description_id' => $id_description_query,
            'email' => 'juan@app.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Emilio Gallego',
            'description_id' => $id_description_query,
            'email' => 'emilio@app.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Jacinto Lopeda',
            'description_id' => $id_description_query,
            'email' => 'jacinto@app.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Bryan Martinez',
            'description_id' => $id_description_query,
            'email' => 'bryan@app.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Andres Cardenas',
            'description_id' => $id_description_query,
            'email' => 'andres@app.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Hector Salamanca',
            'description_id' => $id_description_query,
            'email' => 'hector@app.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
