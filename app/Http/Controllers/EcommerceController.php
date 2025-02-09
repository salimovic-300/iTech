<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        $products = Ecommerce::all();
        return view('ecommerce.index', compact('products'));
    }

    public function contact()
    {
        return view('ecommerce.contact');
    }
}
