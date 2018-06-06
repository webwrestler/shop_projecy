@extends('layouts.app')

@section('content')
<div id="portfolio" class="container" style="align-content: center">
    <h1 style="color: aliceblue">Categoty List</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Alias</th>
            <th>Title</th>

        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->alias}}</td>
                <td>{{$category->title}}</td>

            </tr>
        @endforeach
    </table>

    <h1 style="color: aliceblue">Product List</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Id category</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Description</th>
            <th>URL image</th>

        </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->id_category}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->short_description}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->image}}</td>
        </tr>
    @endforeach
    </table>
    <span style="align-content: center">{{ $products->links() }}</span>
</div>
@endsection