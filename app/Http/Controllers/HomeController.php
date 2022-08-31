<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class HomeController extends Controller
{
    public function index()
    {
        $people=Person::all();
        return view('welcome',compact('people'));
    }
}