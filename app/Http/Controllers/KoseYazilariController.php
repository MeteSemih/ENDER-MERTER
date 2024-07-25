<?php

namespace App\Http\Controllers;

use App\Models\KoseYazilari;
use Illuminate\Http\Request;

class KoseYazilariController extends Controller
{
    public function index()
    {
        $texts = KoseYazilari::all();
        return view('welcome', compact('texts'));
    }
}

