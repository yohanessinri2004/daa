<?php

// database/seeders/FacultySeeder.php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    public function run()
    {
        Faculty::create([
            'name' => 'Fakultas Teknik',
            'dean' => 'Dr. Budi Santoso',
        ]);

        Faculty::create([
            'name' => 'Fakultas Ekonomi',
            'dean' => 'Dr. Siti Aisyah',
        ]);
    }
}
