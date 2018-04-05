<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hello!!! From welcome Controller";
    }
}
