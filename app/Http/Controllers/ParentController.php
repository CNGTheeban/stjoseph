<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    //profile render
    public function index()
    {
        return view('parents');
    }
    
    //profile render
    public function profile()
    {
        return view('profile');
    }
    //add parent render
    public function addParent()
    {
        return view('addParent');
    }
}
