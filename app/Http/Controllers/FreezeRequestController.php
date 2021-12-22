<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreezeRequestController extends Controller
{
    public function index()
    {
        $all = \DB::table('timeline')->limit(10)->get();
        return view('long_examination')->with('timeline', $all);
    }
}