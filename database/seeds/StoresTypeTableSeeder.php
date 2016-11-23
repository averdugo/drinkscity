<?php

use Illuminate\Database\Seeder;

class StoresTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Botilleria','Bar/Pub','Discoteque','Club Nocturno', 'Restobar', 'Distribuidora', 'Delivery', 'Evento', 'Hotel', 'Motel'];

        foreach ($array as $a) {
            DB::table('stores_type')->insert([
                'name' => $a
            ]);
        }
    }
}
