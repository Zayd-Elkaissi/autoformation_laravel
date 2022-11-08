<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Student;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  one to one
    public function hasOne()
    {
        $data = Promotion::find(1)->HasOneStudent ;
        return $data  ;
    }


    //  one to many
    public function hasMany()
    {
        $data = Promotion::find(1)->HasManyStudent ;
        return $data  ;
    }







    // belongsTo
    public function belongsTo()
    {
        $data = Student::find(2);

        return $data->promotion .$data  ;

    }


    

    public function belongsToMany(){

        $user = Student::find(1);

            return $user->Briefs;
    }


}


