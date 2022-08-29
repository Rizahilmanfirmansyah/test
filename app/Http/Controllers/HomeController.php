<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kartu;

class HomeController extends Controller
{
    public function index()
    {
        $kartur = kartu::count();
        return view('kartu.dashboard', compact('kartur'));

    }
}
