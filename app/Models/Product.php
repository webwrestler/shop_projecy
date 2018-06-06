<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    static function getPublishedProducts()
    {
        $products = DB::table('products');
        return $products;
    }

    static function getProductsCategory($categoriId)
    {
        $categories_products = DB::table('products')
            ->where('id_category', '=', $categoriId)
            ->paginate(4);
        return $categories_products;
    }

    static function getIdProduct($id)
    {
        $productId = DB::table('products')
            ->where('id', '=', $id)
            ->get();
        return $productId;
    }

    static function createNewProduct($request)
    {
        $request->validate([
            'id_category' => 'required',
            'title' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        $id_category = $request->id_category;
        $title = $request->title;
        $short_description = $request->short_description;
        $description = $request->description;
        $nameImage = $request->image->getClientOriginalName();
        $image = $request->file('image');
        $path = $image->storeAs('images', $nameImage);

        $result = DB::table('products')->insert(
            ['id_category' => $id_category,
             'title'  => $title,
             'short_description' => $short_description,
             'description' => $description,
             'image' => $path,
            ]);
        return $result;
    }

    static function updateNewProduct($request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'id_category' => 'required',
            'title' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);
        $id = $request->id;
        $id_category = $request->id_category;
        $title = $request->title;
        $short_description = $request->short_description;
        $description = $request->description;
        $nameImage = $request->image->getClientOriginalName();
        $image = $request->file('image');
        $path = $image->storeAs('images', $nameImage);

        $result = DB::update('update products set id_category = ?, title = ?, short_description = ?, 
description = ?, image = ? where id = ?', [$id_category, $title, $short_description, $description, $path, $id]);
        return $result;
    }

    static function daleteProductId($request)
    {
        $id = $request->id;
        $result = DB::delete('delete from products where id = ?' , [$id]);
        return $result;
    }
}
