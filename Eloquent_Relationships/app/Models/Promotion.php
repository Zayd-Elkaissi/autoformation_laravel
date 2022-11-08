<?php

namespace App\Models;
use App\Models\Briefs;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    use HasFactory;

//  protected $fillable

  function HasOneStudent(){
    return $this->hasOne(Student::class);
  }




  function HasManyStudent(){
    return $this->hasMany(Student::class);
  }


}
