<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function show($id)
    {
        return view('profile', ['user' => User::findOrFail($id)]); //test
    }
}
