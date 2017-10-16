<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            [
                'name' => 'doremon',
                'date_of_birth' => date('Y-m-d'),
                'breed_id' => 1
            ],
            [
                'name' => 'dsfg',
                'date_of_birth' => date('Y-m-d'),
                'breed_id' => 2
            ],

        ]);
    }
}
