<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
  public function index()
  {
    $breadcrumbs = ['parent' => t('dashboard')];
    return view('admin.dashboard.index', compact('breadcrumbs'));
  }
}
