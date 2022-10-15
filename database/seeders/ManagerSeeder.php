<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ManagerSeeder extends Seeder
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

            DB::table('managers')->insert([
                    'branch_id'                             =>          $faker->numberBetween(1,25),
                    'managerFname'                          =>          $faker->name(),
                    'managerLname'                          =>          $faker->name(),
                    'managerAddress'                        =>          $faker->address(),
                    'managerPhone'                          =>          $faker->numberBetween(10,2000),
                    'managerSallary'                        =>          $faker->numberBetween(10000,50000),
                    'managerScanedId'                       =>          $faker->text(),
                

            ]);
        }
    }
}
