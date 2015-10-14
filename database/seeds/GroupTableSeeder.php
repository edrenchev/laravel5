<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Месо и месни продукти',
        ]);
        DB::table('groups')->insert([
            'name' => 'Хлебни изделия и зърнени храни',
        ]);
        DB::table('groups')->insert([
            'name' => 'Плодове',
        ]);
        DB::table('groups')->insert([
            'name' => 'Ядки',
        ]);
    }
}
