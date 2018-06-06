<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\UploadedFile;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::getPublishedProducts();
        return view('category.index', ['products ' => $products ]);
    }

    public function productId($id)
    {
        $productId = Product::getIdProduct($id);
        return view('product.productId', ['productId' => $productId]);
    }

    public function create(Request $request)
    {
        $result = Product::createNewProduct($request);
        return redirect()->route('admin/product');
    }

    public function update(Request $request)
    {
        $result = Product::updateNewProduct($request);
        return redirect()->route('admin/product');
    }

    public function delete(Request $request)
    {
        $result = Product::daleteProductId($request);
        return redirect()->route('admin/product');
    }

}
