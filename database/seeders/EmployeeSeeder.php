<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
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

            DB::table('employees')->insert([
                    'branch_id'                             =>          $faker->numberBetween(1,25),
                    'employeeFname'                         =>          $faker->name(),
                    'employeeLname'                         =>          $faker->name(),
                    'employeeAddress'                       =>          $faker->address(),
                    'employeePhone'                         =>          $faker->numberBetween(10,2560456),
                    'employeeSallary'                       =>          $faker->numberBetween(10000,50000),
                    'employeeRoll'                          =>          $faker->jobTitle(),
                    'employeeScanedId'                      =>          $faker->text(),
                

            ]);
        }
    }
}
