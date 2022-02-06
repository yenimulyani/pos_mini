<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
	public function create()
    {
        return view('login');
    }

    public function store(Request $request) 
    {
    	$credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Proses masuk gagal!. Silahkan coba kembali.',
            ]); 
        }
  
        $request->user()->createToken('access_token')->plainTextToken;
   
        $request->session()->regenerate();

        // return back();
        return view('dashboard');
    }

    public function user(Request $request)
    {
        return $request->user();
    }

    public function destroy(Request $request)
    {
    	$request->user()->tokens()->where('tokenable_id', Auth::user()->id)->delete();
        
        Auth::logout();  
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return back();
         return view('login');
    }

}
