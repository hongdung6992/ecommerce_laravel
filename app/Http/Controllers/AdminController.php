<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function getLogin()
  {
    return view('layouts.login');
  }

  public function postLogin(LoginRequest $request)
  {
    $input = $request->only(array_keys($request->rules()));
    if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
      return redirect()->route('dashboard')->with(['flash_level' => 'alert-success', 'flash_message' => 'Đăng nhập thành công!']);
    } else {
      return redirect()->back()->with(['flash_level' => 'alert-danger', 'flash_message' => 'Email hoặc mật khẩu không đúng!']);
    }
  }

  public function logout()
  {
    Session::flush();
    return redirect()->route('login')->with(['flash_level' => 'alert-success', 'flash_message' => 'Đăng xuất thành công!']);
  }

  public function register()
  {
    return view('layouts.register');
  }
}
