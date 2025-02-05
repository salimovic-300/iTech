<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
      // Affiche le formulaire d'inscription
      public function showRegistrationForm()
      {
          return view('auth.register');
      }
  
      // Gère l'inscription
      public function register(Request $request)
      {
          // Validation des données
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|string|email|max:255|unique:users',
              'password' => 'required|string|min:8|confirmed',
          ]);
  
          // Création de l'utilisateur
          User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
          ]);
  
          // Redirige après inscription
          return redirect('/')->with('success', 'Inscription réussie !');
      }
}
