<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{

    function sayHi(){
        $message = "";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ]);
    }



    function addUser(Request $request){
        
        $name = $request-> name;

        return response()->json([
            "status" => "Success",
            "message" => $name
        ]);
    }


}
