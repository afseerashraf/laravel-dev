<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class Students_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'Student_name' => 'Jhon Doe',
            'email' => 'jhonedoe@example.com',
            'mobile' => '1234567890',
            'dob' => '2002-05-12',
            'cource' => 'Ethical Hacking',
        ]);
        Student::create([
            'Student_name' => 'Jhon Sith',
            'email' => 'jhonesmith@example.com',
            'mobile' => '0987654321',
            'dob' => '2001-03-22',
            'cource' => 'Web development',
        ]);
        Student::create([
            'Student_name' => 'Michael Jhonson',
            'email' => 'michaeljhoneson@example.com',
            'mobile' => '1122334455',
            'dob' => '2000-11-10',
            'cource' => 'UX Design',
        ]);
        
    }
}
