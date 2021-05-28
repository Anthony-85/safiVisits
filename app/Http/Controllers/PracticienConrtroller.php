<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PracticienConrtroller extends Controller
{
    public function list()
    {
        $http=Http::get(env('API_BASE_URL').'/practitioner');

        $users = $http->object();

        return view('portfeuillePracticien',[
            'users'=>$users
        ]);
    }
}
