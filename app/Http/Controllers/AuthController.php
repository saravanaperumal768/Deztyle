<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Product;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function login()
    {
        // Check if the user is already logged in
        if (Auth::check()) {
            // Redirect to the account page if authenticated
            return redirect()->route('account');
        }

       
        return view('auth.login');
    }


    public function authenticate(Request $request)
{
    // Validate the input credentials
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate using Laravel's built-in Auth functionality
    if (Auth::attempt($credentials)) {
        // Regenerate the session to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect to the intended page or default to '/account'
        return redirect()->intended('/');
    }

    // If authentication fails, return an error response
    return back()->withErrors([
        'email' => 'Invalid email or password.',
    ])->onlyInput('email');
}

    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); 

    }

    public function account(){
        return view('account');
    }

    public function products(){
     
        $products = Product::latest()->take(10)->with('category','productDetail')->get();
        return view('index', compact('products'));

    }
}
