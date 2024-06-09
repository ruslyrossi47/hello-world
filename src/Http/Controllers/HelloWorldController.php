<?php

namespace Rusly\HelloWorld\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('hello-world::index');
    }
}
