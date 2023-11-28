<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
  public function create()
  {
    return view("admin.auth.login");
  }
  public function store(Request $request)
  {
    $credentials = $request->validate([
      "email" => ["required", "email"],
      "password" => ["required"],
    ]);

    if (Auth::attempt($credentials)) {
      return redirect("admin/dashboard");
    }
    return back();
  }
  public function logout(Request $request)
  {
    $request->session()->flush();
    Auth::logout();
    return redirect("admin/auth/login");
  }
}
