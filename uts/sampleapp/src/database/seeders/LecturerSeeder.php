<?php

// database/seeders/LecturerSeeder.php

namespace Database\Seeders;

use App\Models\Lecturer;
use App\Models\Program;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    public function run()
    {
        $program1 = Program::where('name', 'Teknik Informatika')->first();
        $program2 = Program::where('name', 'Manajemen')->first();

        Lecturer::create([
            'name' => 'Dr. John Doe',
            'program_id' => $program1->id,
            'qualification' => 'S3',
        ]);

        Lecturer::create([
            'name' => 'Dr. Jane Smith',
            'program_id' => $program2->id,
            'qualification' => 'S2',
        ]);
    }
}
