<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centres')->insert([
            'nom'=>'Ins Baix Camp',
            'direccio'=>'C. Baix Camp 1',
            'poblacio'=>'Reus',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('centres')->insert([
            'nom'=>'Compte de Rius',
            'direccio'=>'C. Compte de Rius 3',
            'poblacio'=>'Tarragona',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('centres')->insert([
            'nom'=>'CITM UPC',
            'direccio'=>'C. Universitat 10',
            'poblacio'=>'Terrassa',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
