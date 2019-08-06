<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\UserRequest;

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
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = str_random(8);
    $user->role_id = $request->role_id;
    $user->status = $request->status;
    $user->remember_token = $request->_token;
    $user->save();
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
    return view('admin.users.edit', compact('breadcrumbs', 'user'));
  }

  public function update(Request $request, $id)
  {
    $userRequest = new UserRequest;
    $this->validate($request, $userRequest->rules(true, $id), $userRequest->messages(), $userRequest->attributes());
    $user = User::findOrFail($id);    
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->role_id = $request->role_id;
    $user->status = $request->status;
    $user->remember_token = $request->_token;
    $user->save();
  }

  public function destroy($id)
  {
    //
  }
}
