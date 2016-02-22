<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Shows the main page
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //A new user is created and saved in the database
        $user = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->birthday = $request->birthday;
        $user->gender   = $request->gender;
        $user->save();

        //Current user is redirected to the main page
        return view('success');
    }
}
