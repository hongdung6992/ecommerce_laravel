<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function index()
  {
    $breadcrumbs = [
      'parent' => t('user.manage'),
      'level_1' => t('user.list')
    ];
    $users = User::all();
    return view('admin.users.index', compact('breadcrumbs', 'users'));
  }

  public function create()
  {
    $breadcrumbs = [
      'parent' => t('user.manage'),
      'level_1' => t('user.create')
    ];
    return view('admin.users.create', compact('breadcrumbs'));
  }

  public function store(UserRequest $request)
  {
    $user = new User;
    $password = str_random(8);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = Hash::make($password);
    $user->role_id = $request->role_id;
    $user->status = $request->status;
    $user->remember_token = $request->_token;
    if ($user->save()) {
      $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password
      ];

      Mail::to($request->email)->send(new UserMail($data));
      return redirect()->route('user.index')->with(['flash_level' => 'alert-success', 'flash_message' => t('user.success_add')]);
    }
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $breadcrumbs = [
      'parent' => t('user.manage'),
      'level_1' => t('user.edit')
    ];
    $user = User::findOrFail($id);
    $disabled = 'disabled';
    return view('admin.users.edit', compact('breadcrumbs', 'user', 'disabled'));
  }

  public function update(Request $request, $id)
  {
    $userRequest = new UserRequest;
    $this->validate($request, $userRequest->rules(true, $id), $userRequest->messages(), $userRequest->attributes());
    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->role_id = $request->role_id;
    $user->status = $request->status;
    $user->remember_token = $request->_token;
    if ($user->save()) {
      return redirect()->route('user.index')->with(['flash_level' => 'alert-success delay', 'flash_message' => t('user.success_edit')]);
    }
  }

  public function destroy($id)
  {
    //
  }
}
