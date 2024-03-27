<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function postregister(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect("login")->withSuccess("User registered successfully");
    }

    public function create(array $data)
    {
        return User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]), // Use bcrypt to hash the password
        ]);
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->withSuccess("Login successful");
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Invalid login credentials',
        ]);
    }


  public function logout()
    {
        Auth::logout(); // Logout the user
        return redirect()->route('login'); // Redirect to login page
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('dashboard', compact('user'));
        }
        return redirect("login")->withError("please login to access dashboard page");
    }
}
