<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConnexionController extends Controller
{
    function userLogin(Request $req)
    {
        $http = Http::post(env('API_BASE_URL') . '/auth/login',[
           'login'=> $req->input("login"),
           'password'=> $req->input("password"),
        ]);

        session(['api_token' => $http->object()->access_token]);

        return view('welcome');
    }

    public function index()
    {
        return view('login');
    }

}
