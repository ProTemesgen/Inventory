<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BranchSeeder extends Seeder
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

            DB::table('branches')->insert([
                    'branchName'               =>          $faker->name(),
                    'branchAddress'                 =>          $faker->text(),
                    'RentalCost'                 =>          $faker->numberBetween(5000,50000),
            ]);
        }
    }
}
