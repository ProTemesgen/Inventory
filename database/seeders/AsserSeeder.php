<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AsserSeeder extends Seeder
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

            DB::table('assets')->insert([
                    'category_id'               =>          $faker->numberBetween(1,25),
                    'branch_id'                 =>          $faker->numberBetween(1,25),
                    'assetCost'                 =>          $faker->numberBetween(5000,50000),
                    'assetDescription'          =>          $faker->text()
            ]);
        }
    }
}
