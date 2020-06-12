<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index() {return view('welcome');}
    public function servicios() {return view('servicios');}
    public function contacto() {return view('contacto');}
}
