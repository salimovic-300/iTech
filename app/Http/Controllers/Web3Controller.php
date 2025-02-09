<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Supposons que vous avez un modèle "Service"

class Web3Controller extends Controller
{
    public function index()
    {
        // Récupérer tous les services depuis la base de données
        $services = Service::all(); // Ou une autre logique pour récupérer les services

        // Passer la variable $services à la vue
        return view('web3.index', compact('services'));
    }
}