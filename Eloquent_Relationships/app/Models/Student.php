<?php

namespace App\Models;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function Promotion(){
        return $this->belongsTo(Promotion::class);
    }


    public function Briefs()
    {
        return $this->belongsToMany(Briefs::class);
    }
}

