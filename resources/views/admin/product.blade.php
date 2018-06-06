@extends('layouts.app')

@section('content')

    <div id="portfolio" class="container" style="align-content: center">
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
        <div class="row">
            <div class="col-3">
                <h1 style="color: #c6c8ca">Create new porduct</h1>
                <form action="{{route('product/create')}}" method="post" enctype="multipart/form-data" class="btn btn-default dropdown-toggle">
                    {{ csrf_field() }}
                    <p><select name="id_category" class="btn dropdown-toggle">
                            <option disabled selected>Select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select></p>

                    <label for="title" style="color: black">Title</label><br>
                    <input type="text" name="title"><br><br>

                    <label for="title" style="color: black">Short Description</label><br>
                    <input type="text" name="short_description"><br><br>

                    <label for="title" style="color: black">Description</label><br>
                    <input type="text" name="description"><br><br>

                    <label for="title" style="color: black">Download image</label><br>
                    <input type="file" name="image" id="profile-img">
                    <img src="" id="profile-img-tag" width="200px" /><br>

                    <input type="submit" class="btn btn-primary"><br><br>
                </form>
            </div>

            <div class="col-3">
                <h1 style="color: #c6c8ca">Change category</h1>
                <form action="{{route('product/update')}}" method="post" enctype="multipart/form-data" class="btn btn-default dropdown-toggle">
                    {{ csrf_field() }}

                    <p><select name="id" class="btn dropdown-toggle">
                            <option disabled selected>Select product for delet</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->title}} id: {{$product->id}} </option>
                            @endforeach
                        </select></p>

                    <p><select name="id_category" class="btn dropdown-toggle">
                            <option disabled selected>Select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select></p>

                    <label for="title" style="color: black">Title</label><br>
                    <input type="text" name="title"><br><br>

                    <label for="title" style="color: black">Short Description</label><br>
                    <input type="text" name="short_description"><br><br>

                    <label for="title" style="color: black">Description</label><br>
                    <input type="text" name="description"><br><br>

                    <label for="title" style="color: black">Download image</label><br>
                    <input type="file" name="image" id="img_change" >
                    <img src="" id="see-img" width="200px" /><br>

                    <input type="submit" class="btn btn-primary"><br><br>
                </form>
            </div>

            <div class="col-3">
                <h1 style="color: #c6c8ca">Delet product</h1>
                <form action="{{route('product/delete')}}" method="post" class="btn btn-default dropdown-toggle">
                    {{ csrf_field() }}
                    <p><select name="id" class="btn dropdown-toggle">
                            <option disabled selected>Select product for delet</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->title}} id: {{$product->id}} </option>
                            @endforeach
                        </select></p>
                    <p><input type="submit"  class="btn btn-primary" value="Delet"></p>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function readURL(input, img) {
            if (input.files && input.files[0]    ) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#img_change").change(function(){
            readURL(this, $("#see-img"));
        });

        $("#profile-img").change(function(){
            readURL(this, $("#profile-img-tag"));
        });
    </script>
@endsection

