<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create ([
            'schoolId'=>001,
            'schoolType'=>"A1",
            'schoolcategory'=>"provincial",
            'province'=>"western",
            'district'=>"gampaha",
            'zonalEducationOffice'=>"minuwangoda",
            'educationDivision'=>"mirigama",
            'schoolName'=>"badaranayake m.v",
            'address'=>"BMV mirigama",
            'telNo'=> "0332256478",
            'email'=>"bandaranayake@gmail.com"]);
    }
}
