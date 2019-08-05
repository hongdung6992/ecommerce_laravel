<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
  public function index()
  {
    $breadcrumbs = [
      'parent' => t('user.manage'),
      'level_1' => t('user.list')
    ];
    return view('admin.users.index', compact('breadcrumbs'));
  }

  public function create()
  {
    $breadcrumbs = [
      'parent' => t('user.manage'),
      'level_1' => t('user.create')
    ];
    return view('admin.users.create', compact('breadcrumbs'));
  }

  public function store(Request $request)
  {
    //
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
    return view('admin.users.edit', compact('breadcrumbs'));
  }

  public function update()
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
