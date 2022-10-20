<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function index(Request $request){
        $name = $request->input("name");
        return view('index',compact("name"));
    }

      //exemple 2
      function findId(Request $request,$id){

        if($id > 1){
        $name = $request->input("name");
        return "Hello $name";
    }
    }
}


