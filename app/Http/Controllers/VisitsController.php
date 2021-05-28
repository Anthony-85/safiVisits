<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VisitsController extends Controller
{
    public function index()
    {

        $response =  json_decode(Http::get(env('API_BASE_URL').'/visit'));




        return view('visits',
            ['visits'=>$response]);



    }
}
