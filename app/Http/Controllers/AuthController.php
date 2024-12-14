<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Laravel\Sanctum\HasApiTokens;


class AuthController extends Controller
{
        // Register
        // Metodo per la registrazione
        public function register(Request $request)
        {
        // Valida i dati del form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crea il nuovo utente
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Attiva il token per l'autenticazione
        $token = $user->createToken('auth_token')->plainTextToken;

        // Login automatico
        Auth::login($user);

        // Response
        // return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
        return redirect()->route('dashboard')->with('success', 'Registrazione avvenuta con successo! Benvenuto!');
    }

    // Login
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Tentativo di login
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Redirect con messaggio di successo
            return redirect()->route('dashboard')->with('success', 'Login effettuato con successo!');
        }

        // Se il login fallisce
        return redirect()->route('login')->withErrors(['email' => 'Credenziali non valide'])->withInput();
    }

    // Logout
    public function logout(Request $request){

       // Elimina tutti i token attivi per l'utente
        $request->user()->tokens()->delete();

        // Invalida la sessione
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Reindirizza alla home o al login con messaggio di successo
        return redirect()->route('home')->with('success', 'Sei stato disconnesso correttamente.');
    }

}
