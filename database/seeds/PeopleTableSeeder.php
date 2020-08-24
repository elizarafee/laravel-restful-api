<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\models\People');
        for ($i=0; $i<100; $i++) {
            DB::table('People')-> insert([
            'name' =>  $faker->name(),
            'age' =>  $faker->numberBetween(18, 110),
            'city' =>  $faker->city(),
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
            // 'deleted_at' =>  \Carbon\Carbon::now(),
        ]);
        }
    }
}