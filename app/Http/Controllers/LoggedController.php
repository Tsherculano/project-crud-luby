<?php

namespace App\Http\Controllers;


class LoggedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
