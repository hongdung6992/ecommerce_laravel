<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function index(Request $request)
  {
    if ($request->id == 1){
      $products = Product::all();
    }else{
      $products = Product::where('category_id', $request->id)->get();
    }
    return response()->json($products);
  }

  public function create()
  {
    //
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
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
