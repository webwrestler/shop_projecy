<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::getPublishedCategories()->get();
        $products = Product::getPublishedProducts()->paginate(7);
        return view('admin.index',  ['products' => $products, 'categories' => $categories]);
    }

    public function product()
    {
        $categories = Category::getPublishedCategories()->get();
        $products = Product::getPublishedProducts()->paginate(7);
        return view('admin.product',  ['products' => $products, 'categories' => $categories]);
    }

    public function category()
    {
        $categories = Category::getPublishedCategories()->get();
        return view('admin.category', ['categories' => $categories]);
    }
}
