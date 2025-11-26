<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $email = $request->json()->get("email");
        $password = $request->json()->get("password");

        if(Auth::attempt(["email" => $email, "password" => $password])){
            $user = Auth::user();
            $token = $user->createToken("token")->plainTextToken;

            return response()->json(["token" => $token], 200);
        }else{
            return response()->json(["unsuccess" => "login incorrecto"], 403);
        }

        
    }
}