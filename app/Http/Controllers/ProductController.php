<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = Product::query();

        // Filtre par nom
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Filtre par prix
        if ($request->has('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }
        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Filtre par stock
        if ($request->has('stock')) {
            $query->where('stock', '>=', $request->input('stock'));
        }

        // Tri des résultats
        if ($request->has('sort_by')) {
            $sortField = $request->input('sort_by');
            $sortDirection = $request->input('sort_dir', 'asc');
            $query->orderBy($sortField, $sortDirection);
        }

        // Pagination des résultats
        $products = $query->paginate(10);

        return view('products.search', compact('products'));
    }
}