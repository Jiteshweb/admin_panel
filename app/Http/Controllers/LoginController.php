<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;

class LoginController extends Controller
{
    //

    public function register(Request $req)
    {
        // Validating request data
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Creating a new User instance and assigning values from the request
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = hash::make($req->password); // Hashing the password for security
        $user->save();


        return redirect()->route('login')->with("message", "Your Registration Was Successful");

    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                // Check if the user is an admin (user type 1)
                if ($user->usertype == 1) {
                    $request->session()->put('user', $user);
                    return redirect()->route('dashboard')->with('success', 'Signed in as admin');
                }

                // For non-admin users, you can redirect them elsewhere or handle it as needed
                else {
                    $request->session()->put('user', $user);
                    return redirect()->route('index')->with('success', 'Signed in');
                }
            } else {
                return redirect()->back()->with('error', 'Login details are not valid');
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during login process
            return redirect()->back()->with('error', 'An error occurred while logging in.');
        }
    }



    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        return redirect()->route('login')->withSuccess('Logged out successfully');
    }

    public function forgotpasswordpage()
    {
        return view('sidbar-pages.additional-pages.forgot_password');
    }
    public function forgotpassword(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);

            User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            return redirect()->route('login')->with('success', 'Password updated');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while changning password');
        }

    }
}
