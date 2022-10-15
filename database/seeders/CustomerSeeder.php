<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
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

            DB::table('customers')->insert([
                    'customerFname'                         =>          $faker->name(),
                    'customerLname'                         =>          $faker->name(),
                    'customerAddress'                       =>          $faker->address(),
                    'customerPhone'                         =>          $faker->numberBetween(10,1000),
                    'customerScanedId'                      =>          $faker->text(),
                    'customerAvailableBalance'              =>          $faker->numberBetween(7000,70000),

            ]);
        }
    }
}
