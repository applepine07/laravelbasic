<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    protected $table='loves';
    protected $fillable=[
        'students_id',
        'name'
    ];
    use HasFactory;
    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}
