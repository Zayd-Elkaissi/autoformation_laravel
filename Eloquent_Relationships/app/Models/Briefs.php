<?php

namespace App\Models;
use App\Models\Promotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Briefs extends Model
{
    use HasFactory;

    public function Student()
{
    return $this->belongsToMany(Student::class);
}
}
