<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::getPublishedCategories()->paginate(4);
        return view('category.index', ['categories' => $categories ]);
    }

    public function category($id)
    {
        $categories = Category::getPublishedCategories()->get();
        $categories_products = Product::getProductsCategory($id);
        return view('category.index', ['categories_products' => $categories_products, 'categories' => $categories]);
    }

    public function create(Request $request)
    {
        $result = Category::createCategory($request);
        return redirect()->route('admin/category');
    }

    public function update(Request $request)
    {
        $result = Category::updateCategoryId($request);
        return redirect()->route('admin/category');
    }

    public function delete(Request $request)
    {
        $result = Category::deleteCategoryId($request);
        return redirect()->route('admin/category');
    }
}
