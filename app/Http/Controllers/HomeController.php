<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.home',['jumlahSuratMenunggu' => $jumlahSuratMenunggu]);
    }
}
