<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Model\users;

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
        // dd($request->all());

        $request->validate([
            "name" => "required",
            "email" => "rquired|email|unique:users",
            "password" => "required|min:6",
        ]);

        $data = $request->all();
        $createUser = this->create($data);
        return redirect("login")->withSuccess("we are register successfully");
    }

    public function create(array $data)
    {
        return user::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => $data["password"],
        ]);
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());

        $request->validate([
            "email" => "rquired|email",
            "password" => "required",
        ]);
        $checkLoginCradentials = $request->only("email", "password");
        if (Auth::attempt($checkLoginCradentials)) {
            return redirect("login")->withSuccess(
                "we are register successfully"
            );
        }

        return redirect("login")->withSuccess("we are register successfully");
    }
}
