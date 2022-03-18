<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    use HasFactory;
    protected $table = 'loves';
    protected $fillable = [
        'student_id',
        'name'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
