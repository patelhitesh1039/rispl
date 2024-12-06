<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('pages/login', [
            'layout' => 'login',
        ]);
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return response()->json([
                'success' => "Login Success",
                'first' => '/dashboard',
            ]);
        }
        if (Auth::guard('supervisor')->attempt($credentials)) {
            return response()->json([
                'success' => "Login Success",
                'first' => 'sup/dashboard',
            ]);
        }
        if (Auth::guard('customer')->attempt($credentials)) {
            return response()->json([
                'success' => "Login Success",
                'first' => '/dashboard',
            ]);
        }
        return response()->json([
            'error' => ['Invalid Credential'],
        ]);
    }
}
