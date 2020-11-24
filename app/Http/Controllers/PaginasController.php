<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{

    public function contacto()
    {
        return view('contacto');
    }
    /******************************************/
    public function servicios()
    {
        return view('servicios');
    }
}