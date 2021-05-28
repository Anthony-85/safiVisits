<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MedicinesController extends Controller
{
    public function add()
    {

        $response =  json_decode(Http::post(env('API_BASE_URL').'/medicine/add'));




        return view('complementaryActivities',
            ['visits'=>$response]);



    }
}
