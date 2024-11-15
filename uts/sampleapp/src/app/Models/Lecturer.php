<?php

// app/Models/Lecturer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'program_id', 'qualification'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
