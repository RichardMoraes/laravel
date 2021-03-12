<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function helloWorld() {
         return view('hello_world');
    }
    public function hello($name = 'Fulano') {
         return 'O cadu é????, ' . $name;
    }
}
