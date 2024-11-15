<?php
// database/seeders/StudentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Program;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $program1 = Program::where('name', 'Teknik Informatika')->first();
        $program2 = Program::where('name', 'Manajemen')->first();

        Student::create([
            'name' => '
