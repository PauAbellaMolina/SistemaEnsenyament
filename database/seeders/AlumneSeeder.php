<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AlumneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnes')->insert([
            'nom'=>'Pau',
            'cognoms'=>'Abella Molina',
            'data_naixement'=>date('Y-m-d H:m:s'),
            'centre_id'=>1,
            'ensenyament_id'=>3,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('alumnes')->insert([
            'nom'=>'Brooke',
            'cognoms'=>'Rabotou Climber',
            'data_naixement'=>date('Y-m-d H:m:s'),
            'centre_id'=>2,
            'ensenyament_id'=>2,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('alumnes')->insert([
            'nom'=>'Adam',
            'cognoms'=>'Ondra Climber',
            'data_naixement'=>date('Y-m-d H:m:s'),
            'centre_id'=>3,
            'ensenyament_id'=>1,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
