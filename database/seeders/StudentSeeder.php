<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        $departments = ['Computer Science', 'Electrical Engineering', 'Mechanical Engineering', 'Civil Engineering', 'Information Systems'];
        $majors = [
            'Computer Science' => ['Software Engineering', 'Artificial Intelligence', 'Data Science'],
            'Electrical Engineering' => ['Power Systems', 'Control Systems', 'Telecommunications'],
            'Mechanical Engineering' => ['Thermal Engineering', 'Mechatronics', 'Manufacturing'],
            'Civil Engineering' => ['Structural Engineering', 'Transportation', 'Environmental Engineering'],
            'Information Systems' => ['Business Intelligence', 'Enterprise Systems', 'Digital Transformation']
        ];

        for ($i = 0; $i < 20; $i++) {
            $department = $faker->randomElement($departments);
            $major = $faker->randomElement($majors[$department]);
            
            Student::create([
                'student_id' => $faker->unique()->regexify('2023[0-9]{5}'),
                'nim' => $faker->unique()->regexify('202301[0-9]{4}'),
                'name' => $faker->name,
                'department' => $department,
                'major' => $major,
                'phone' => $faker->numerify('08##########'),
                'password' => Hash::make('password'), // password default
            ]);
        }
    }
}