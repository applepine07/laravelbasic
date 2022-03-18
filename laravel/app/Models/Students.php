<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'chinese',
        'english',
        'math',
    ];
    public function phoneRelation()
    {
        return $this->hasOne(Phone::class);
    }
    public function lovesRelation()
    {
        return $this->hasMany(Love::class);
    }
}

