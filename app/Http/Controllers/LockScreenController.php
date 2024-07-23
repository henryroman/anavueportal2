<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LockScreenController extends Controller
{
    public function showLockScreen()
    {
        return view('livewire.examples.lock-screen');
    }

    public function unlock(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $user = Auth::user();
        
        if (Hash::check($request->password, $user->password)) {
            // Password matches
            Session::forget('locked');
            return redirect()->route('dashboard'); // Assuming 'dashboard' is the route name for your dashboard
        }

        // Password does not match
        return redirect()->route('lock-screen')->withErrors(['password' => 'Incorrect password']);
    }

    public function lock()
    {
        Session::put('locked', true);
        return redirect()->route('lock-screen');
    }
}