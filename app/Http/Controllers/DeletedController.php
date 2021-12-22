<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeletedController extends Controller
{
    public function index()
    {
        $all = \DB::table('timeline')->limit(10)->get();
        return view('home')->with('timeline', $all);
    }
}