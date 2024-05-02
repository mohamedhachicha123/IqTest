<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = $this->credentials($request);
        // Attempt to log the user in
        if (\auth('user')->attempt($credentials)) {
            // If successful, redirect to their intended location with a success message
            return redirect('/user/home')->with('status', 'Logged in as user successfully!');
        }
        if (\auth('admin')->attempt($credentials)) {
            // If successful, redirect to their intended location with a success message
            return redirect('/admin/users')->with('status', 'Logged in as admin successfully!');
        }

        // If unsuccessful, redirect back to the login with form data
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    protected function credentials(Request $request)
    {
        return $request->only('username', 'password');
    }

    public function logout(Request $request)
    {
        // Check if the 'admin' guard is logged in and log out
        if (auth('admin')->check()) {
            auth('admin')->logout();
        }

        // Check if the 'user' guard is logged in and log out
        if (auth('user')->check()) {
            auth('user')->logout();
        }

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
