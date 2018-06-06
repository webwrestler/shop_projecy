@extends('layouts.app')

@section('content')
<section>
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
        <div class="row">
            <div class="col-3">
                <h1 style="color: #c6c8ca">Create new category</h1>
                <form action="{{route('category/create')}}" method="post" class="btn btn-default dropdown-toggle">
                    {{ csrf_field() }}

                    <label for="title" style="color: black">Alias</label><br>
                    <input type="text" name="alias"><br><br>

                    <label for="title" style="black: #c6c8ca">Title</label><br>
                    <input type="text" name="title"><br><br>
                    <input type="submit" class="btn btn-primary" value = "Create"><br><br>
                </form>
            </div>
            <div class="col-3">
                <h1 style="color: #c6c8ca">Change category</h1>
                <form action="{{route('category/update')}}" method="post" class="btn btn-default dropdown-toggle">
                    {{ csrf_field() }}

                    <p><select name="id" class="btn dropdown-toggle">
                            <option disabled selected>Select category for change</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}} id: {{$category->id}} </option>
                            @endforeach
                        </select></p>

                    <label for="title" style="black: #c6c8ca">Alias</label><br>
                    <input type="text" name="alias"><br><br>

                    <label for="title" style="black: #c6c8ca">Title</label><br>
                    <input type="text" name="title"><br><br>
                    <input type="submit" class="btn btn-primary" value = "Change"><br><br>
                </form>
            </div>
            <div class="col-3">
                <h1 style="color:  #c6c8ca">Delete category</h1>
                <form action="{{route('category/delete')}}" method="post">
                    {{ csrf_field() }}
                    <p><select name="id" class="btn dropdown-toggle">
                            <option disabled selected>Select category for delete</option>
                                @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}} id: {{$category->id}} </option>
                                @endforeach
                        </select></p>
                    <p><input type="submit"  class="btn btn-primary" value="Delet"></p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection