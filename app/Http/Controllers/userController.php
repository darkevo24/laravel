<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class userController extends Controller
{
    function index(){
        $data = message::all();
        return view ("welcome",compact("data"));
    }

    function login(Request $request){
        return view("login");
    }

    function data(Request $request){
        message::create([
            "email" => $request->email,
            "password" => $request->password
        ]);

        return redirect("/");
    }
    function delete($id){
        $data = message::find($id);
        $data->delete();
        return redirect("/");
    }
}
