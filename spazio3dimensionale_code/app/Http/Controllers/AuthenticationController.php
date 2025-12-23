<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController
{
    public function login(Request $request)
    {
        // 1. Validazione
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required'],
        ]);

        // 2. Tentativo di login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 3. Reindirizzamento basato sul ruolo
            $user = Auth::user();

            if ($user->role === 'admin' || $user->role === 'isTecnicoCentro' || $user->role === 'isTecnicoAzienda') {
                return redirect()->intended('/home');
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
        return redirect('/');
    }
}
