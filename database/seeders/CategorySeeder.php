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
                    'categoryType'                          =>          $faker->name(),
                    'categoryMetric'                        =>          $faker->name(),
                    'categoryPrice'                         =>          $faker->numberBetween(2000,70000),
                    'assetCounter'                          =>          $faker->numberBetween(1,10000000),
            

            ]);
        }
    }
}
