<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'administrador sistema',
        'email' => 'admin@santafe.com',
        'password' => bcrypt('password'),
        'fechaNacimiento' => '1991-01-01',
        'lugarNacimiento' => 'Bolivia',
        'CI' => '1234567',
        'sexo' => 'Masculino',
        'estadoCivil' => 'Soltero',
        'telefono' => '78993739',
        'estado' => 'INACTIVO',
        ]);
    }
}
