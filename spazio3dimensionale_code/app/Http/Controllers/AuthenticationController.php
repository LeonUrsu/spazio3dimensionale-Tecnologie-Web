<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController
{

    #Solo per utenti non autenticati
    public function mostraLogin()
    {
        return view("authentication/login");
    }



    public function login(Request $request)
    {
        // 1. Validazione
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // 2. Tentativo di login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 3. Reindirizzamento basato sul ruolo
            $user = Auth::user();

            if ($user->role === 'isAdmin' || $user->role === 'isTecnicoCentro' || $user->role === 'isTecnicoAzienda') {
                return redirect()->intended('/');
            }
            return redirect()->intended('/login');
        }

        return back()->withErrors([
            'username' => 'Credenziali non valide.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
