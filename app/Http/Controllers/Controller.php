<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public function index()
    {
        $products = Product::getPublishedProducts()->paginate(4);
        $categories = Category::getPublishedCategories()->get();
        return view('index', ['products' => $products, 'categories' => $categories]);
    }
}
