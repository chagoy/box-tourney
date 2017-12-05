<?php

namespace App\Http\Controllers;

use App\Robbery;
use Illuminate\Http\Request;

class RobberyController extends Controller
{
    public function store(Request $request)
    {
    	return Robbery::create([
    		'name' => $request['name'],
    		'email' => $request['email'],
    		'message' => $request['message'],
    		'tournament' => $request['tournament']
    	]);
    }
}
