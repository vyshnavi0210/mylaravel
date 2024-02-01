<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Routing\Controller as BaseController;

class GoController extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        return view('test');
    }
}

