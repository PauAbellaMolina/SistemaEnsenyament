<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class UsuarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom'=>'Pau',
            'cognoms'=>'Abella Molina',
            'data_naixement'=>'2001-12-03',
            'email'=>'pau@pau.com',
            'password'=>Hash::make('12345678'),
            'url_foto'=>'https://media-exp1.licdn.com/dms/image/C4D03AQEl3JnmvXRcSQ/profile-displayphoto-shrink_400_400/0?e=1612396800&v=beta&t=itC3BhLIe15dWV6KsOOKi_Q8ZLAqR-D_uLFuJ60exPk',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            'nom'=>'Anton',
            'cognoms'=>'Dalmau Mines',
            'data_naixement'=>'1990-11-23',
            'email'=>'anton@anton.com',
            'password'=>Hash::make('qwertyui'),
            'url_foto'=>'https://media-exp1.licdn.com/dms/image/C4E03AQG83SLCvfHwTQ/profile-displayphoto-shrink_400_400/0/1562595219257?e=1612396800&v=beta&t=wRyb8nHPETqFVE1cYftby1leMKlwlvqiyBZ1Jxs-f4c',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
