<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'lat' => 42.64589,
            'lng' => 23.3770345,
            'name' => 'Kaufland София',
            'address' => 'ул. Филип Аврамов 3, 1712 София',
        ]);
        
        DB::table('places')->insert([
            'lat' => 42.6431905,
            'lng' => 23.3362051,
            'name' => 'Kaufland София',
            'address' => 'ул. Проф. д-р Иван Странски 20, 1734 София',
        ]);
        
        DB::table('places')->insert([
            'lat' => 42.6484486,
            'lng' => 23.378908,
            'name' => 'Billa София',
            'address' => 'бул. Александър Малинов, 1729 София',
        ]);
        DB::table('places')->insert([
            'lat' => 42.7102626,
            'lng' => 23.2706075,
            'name' => 'Billa София',
            'address' => 'бул. Царица Йоана 15, 1505 София',
        ]);
    }
}
