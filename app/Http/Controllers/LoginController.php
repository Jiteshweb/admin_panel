<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Files;
use Session;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


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
                    $request->session()->put('user', [
                        'id' => $user->id,
                        'name' => $user->name,
                        'usertype' => $user->usertype,
                    ]);
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
    public function imageUpload(Request $request)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');

            if (!isset($user['usertype']) || !isset($user['id'])) {
                return redirect()->back()->with('error', 'Invalid session data.');
            }

            $userType = $user['usertype'];
            $userId = $user['id'];

            if ($userType == '1') {
                $fileName = time() . '.' . $request->imagefile->getClientOriginalExtension();
                $request->imagefile->storeAs('public/admin_img', $fileName);
            } elseif ($userType == '0') {
                $fileName = time() . '.' . $request->imagefile->getClientOriginalExtension();
                $request->imagefile->storeAs('public/img', $fileName);
            } else {
                return redirect()->back()->with('error', 'Invalid user type.');
            }

            $image = new Image;

            $image->user_id = $userId;
            $image->usertype_id = $userType;
            $image->imagefile = $fileName;
            $image->save();

            return redirect()->back()->with('success', 'Image uploaded successfully.');
        }

        return redirect()->back()->with('error', 'No user session found.');
    }

    public function imageDisplay(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $images = Image::where('user_id', $user->id)->get();

            if ($images->isNotEmpty()) {
                return view('images', compact('images'));
            } else {
                return view('images', ['images' => []])->with('message', 'No images found.');
            }
        } else {
            return redirect('login')->with('message', 'Please log in to view your images.');
        }
    }
    public function editImage($id)
    {
        $images = Image::find($id);
        return view('update_image', compact('images'));
    }
    public function updateImage(Request $request, $id)
    {
        $images = Image::find($id);
        if ($request->hasfile('imagefile')) {
            if ($images->usertype_id === '1') {
                $path = 'public/storage/admin_img/' . $images->imagefile;
            } else {
                $path = 'public/storage/img/' . $images->imagefile;
            }
            if (File::exists($path)) {
                (File::delete($path));
            }
            if ($images->usertype_id == '1') {
                $fileName = time() . '.' . $request->imagefile->getClientOriginalExtension();
                $request->imagefile->storeAs('public/admin_img', $fileName);
            } elseif ($images->usertype_id == '0') {
                $fileName = time() . '.' . $request->imagefile->getClientOriginalExtension();
                $request->imagefile->storeAs('public/img', $fileName);
            } else {
                return redirect()->back()->with('error', 'Invalid user type.');
            }
            $images->imagefile = $fileName;
        }
        $images->update();
        return redirect()->back()->with('success', 'Student Image Updated Successfully');


    }

    public function destroy($id)
    {
        $images = Image::find($id);
        if ($images->usertype_id === '1') {
            $path = 'public/storage/admin_img/' . $images->imagefiles;
        } else {
            $path = 'public/storage/img/' . $images->imagefiles;
        }
        if (File::exists($path)) {
            File::delete($path);
        }
        $images->delete();
        return redirect()->back()->with('success', 'Image deleted');
    }
}
