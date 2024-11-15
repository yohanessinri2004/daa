<?php

// app/Models/Program.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'faculty_id'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
