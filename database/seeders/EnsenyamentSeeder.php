<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EnsenyamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ensenyaments')->insert([
            'nom'=>'Desenvolupament Aplicacions Web',
            'descripcio'=>'Cicle formatiu de grau superior de desenvolupament daplicacions web.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('ensenyaments')->insert([
            'nom'=>'Desenvolupament Aplicacions Mobils',
            'descripcio'=>'Cicle formatiu de grau superior de desenvolupament daplicacions mobils.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('ensenyaments')->insert([
            'nom'=>'Administracio de Sistemes Informatics i Xarxes',
            'descripcio'=>'Cicle formatiu de grau superior dadministracio de sistemes informatics i xarxes.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
