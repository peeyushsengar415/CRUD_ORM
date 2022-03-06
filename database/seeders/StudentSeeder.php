<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker=Faker::create();

        for($i=1;$i<20;$i++){
        $student=new Student;      
        $student->name=$faker->name;
        $student->city=$faker->city;
        $student->marks=$faker->unique()->numberBetween(50,93);
        $student->save();
        } 
    }
}
