<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compras;

class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $compras = Compras::latest()->paginate(4);
        // return view('compras.index', compact('compras') );
        return view("compras.index");
    }

}
