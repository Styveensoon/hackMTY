<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function Home()
    {
        return view('index');
    }

    public function Login()
    {
        return view('sesion');
    }

    public function RG()
    {
        return view('registro');
    }

    public function AN()
    {
        return view('casa');
    }

}
