<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Airline;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Routing\Controller as BaseController;
use DB;


class AirlineController extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        return view('airline');
    }
     public function insert()
    {
       $data = DB::table('airlines')->select('*')->get();
        return view('view')->with('data', $data);

    }

    public function store(Request $request)
    {
        $airline = new airline;
        $airline->flight_no = $request->flight_no;
        $airline->airline = $request->airline;

        $airline->save();

        return redirect('insert')->with('status',"Record inserted successfully");
    }
}

