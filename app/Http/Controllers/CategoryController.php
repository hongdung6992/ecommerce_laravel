<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Product;
use Illuminate\Validation\Validator;
use function Opis\Closure\unserialize;

class CategoryController extends Controller
{

  public function index()
  {
    $breadcrumbs = [
      'parent' => t('product.manage'),
      'level_1' => t('product.title')
    ];
    $categories = Category::all();
    $products = Product::all();
    return view('admin.category.index', compact('breadcrumbs', 'categories', 'products'));
  }

  public function store(CategoryRequest $request)
  {
    if ($request->ajax()) {
      Category::create($request->all());
      return response()->json($request->all());
    }
  }

  public function edit(Request $request)
  {
    $category = Category::findOrFail($request->id);
    return response()->json($category);
  }

  public function update(Request $request)
  {
    $userRequest = new CategoryRequest();
    $this->validate($request, $userRequest->rules(true, $request->id), $userRequest->messages(), $userRequest->attributes());
    if ($request->ajax()) {
      $category = Category::findOrFail($request->id);
      $category->update($request->all());
      return response($request->all());
    }
  }

  public function destroy(Request $request)
  {
    $category = Category::findOrFail($request->id);
    $category_child = Category::where('parent_id', $category->id);
    $category_child->update(['parent_id' => $category->parent_id]);
    $category->delete();
  }

  public function move(Request $request)
  {
    $category = Category::findOrFail($request->id);
    $category->parent_id = $request->parent_id;
    $category->save();
  }
}
