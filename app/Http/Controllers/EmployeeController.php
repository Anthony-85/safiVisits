<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    public function profil()
    {

        $http = Http::withHeaders(['Authorization'=> 'Bearer '.session()->get('api_token')])->post(env('API_BASE_URL') . '/auth/me');

        $http=Http::get(env('API_BASE_URL').'/employee/'.$http->object()->id);

        $user = $http->object();

        return view('profil',[
            'user'=>$user
        ]);
    }
}
