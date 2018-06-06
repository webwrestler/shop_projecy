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
            'id_category' => str_random(1, 3),
            'title' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
