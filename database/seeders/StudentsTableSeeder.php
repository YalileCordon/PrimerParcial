<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::create([
        //     'name' => 'John',
        //     'lastname' => 'Marin',
        //     'age' => 25,
        //     'email' => 'john.marin@gmail.com',
        //     'city' => 'Medellin',
        //     'address' => 'Carera',
        //     'birthdate' => '1999-05-15',
        //     'status' => true, 
        // ]);
        Student::factory()->count(50)->create();

    }
}
