<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // public function index()
    // {
    //     $users = DB::table('users')->get();
 
    //     return view('user.index', ['users' => $users]);
    // }

    //Database Get 

    public function index(){
    $user = DB::table('contacts')->get();
 
    return view('index',compact('user'));
}








// Database where  
public function FindId($id)
{
    $user = DB::table('contacts')->where("id",$id)->get();
    
    return view('userId',compact('user'));
}







//Database select first row 
public function FindName()
{
    $user = DB::table('contacts')->first();
    return $user->Nom;
}





//Database OrderBy
public function orderBy()
{   
    $user = DB::table('contacts')->orderBy("Nom")->get();

    return view('index',compact('user'));
}




// Database select
public function select()
{
    $user = DB::table('contacts')
    ->select('Nom','id')
    ->get();

    return view('index',compact('user'));
}






// Database inner join
public function join(){
    $users = DB::table('telephone')
        ->join('contactperson', 'contactperson.id', '=', 'telephone.id_phone')
        ->select('*')
        ->get();
        return view('join',compact('users'));
}
}


