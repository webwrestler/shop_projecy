<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    static function getPublishedCategories()
    {
        $categories = DB::table('categories');
        return $categories;
    }

    static function createCategory($request)
    {
        $request->validate([
            'alias' => 'required|string',
            'title' => 'required|string',
        ]);
        $alias = $request->alias;
        $title = $request->title;
        $result = DB::table('categories')->insert(
                ['alias' => $alias,
                'title'  => $title,
            ]);
        return $result;
    }

    static function updateCategoryId($request)
    {
        $request->validate([
            'alias' => 'required|string',
            'title' => 'required|string',
            'id'    => 'required|numeric',
        ]);
        $alias = $request->alias;
        $title = $request->title;
        $id = $request->id;
        $result =  DB::update('update categories set alias = ?, title = ? where id = ?', [$alias, $title, $id]);
        return $result;
    }

    static function deleteCategoryId($request)
    {
        $id = $request->id;
        $result = DB::delete('delete from categories where id = ?' , [$id]);
        return $result;
    }
}