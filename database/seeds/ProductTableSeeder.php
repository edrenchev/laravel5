<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Агнешко',
            'group_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Свинско филе',
            'group_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Варен геврек',
            'group_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Хляб ръжен',
            'group_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Авокадо',
            'group_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Грозде - бяло',
            'group_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Орехи',
            'group_id' => 4,
        ]);
        DB::table('products')->insert([
            'name' => 'Бадеми сурови',
            'group_id' => 4,
        ]);
    }
}
