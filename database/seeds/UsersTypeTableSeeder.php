<?php

use Illuminate\Database\Seeder;

class UsersTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Administrador','Cliente','Usuario'];

        foreach ($array as $a) {
            DB::table('users_type')->insert([
                'name' => $a
            ]);
        }


    }
}
