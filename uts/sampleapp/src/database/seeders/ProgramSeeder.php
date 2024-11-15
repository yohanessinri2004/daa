<?php

// database/seeders/ProgramSeeder.php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $faculty1 = Faculty::where('name', 'Fakultas Teknik')->first();
        $faculty2 = Faculty::where('name', 'Fakultas Ekonomi')->first();

        Program::create([
            'name' => 'Teknik Informatika',
            'faculty_id' => $faculty1->id,
        ]);

        Program::create([
            'name' => 'Manajemen',
            'faculty_id' => $faculty2->id,
        ]);
    }
}
