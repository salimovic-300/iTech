<?php

namespace App\Http\Controllers;

use App\Models\IA;
use Illuminate\Http\Request;

class IAController extends Controller
{
    public function index()
    {
        $services = IA::all();
        return view('ia.index', compact('services'));
    }
}
