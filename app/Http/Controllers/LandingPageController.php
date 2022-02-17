<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datauser = User::all()->count();
        return view('landing.welcome', ['datauser' => $datauser]);

    }

    
}
