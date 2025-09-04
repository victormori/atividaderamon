<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //chef
    public function chef()
    {
        return view('chef');
    }
    //card
    public function card()
    {
        return view('card');
    }
    //profile 
    public function profile()
    {
        return view('profile');
    }
}