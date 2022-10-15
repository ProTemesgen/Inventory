<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        foreach(range(1,25) as $index){

            DB::table('categories')->insert([
                    'assetQrCode'                           =>          $faker->name(),
                    'assetIdentificationName'               =>          $faker->name(),
                    'assetCounter'                          =>          $faker->numberBetween(1,10000000),
            

            ]);
        }
    }
}
