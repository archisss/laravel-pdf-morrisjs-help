<?php

namespace App\Http\Controllers;

use PDF;
use App\Description;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pdf()
    {
        $descriptions = Description::get();

        $pdf = \PDF::loadView('PDF-VIEW', compact('descriptions'));
        return $pdf->stream();
    }

    public function datatables()
    {
        return 2;
    }
}
