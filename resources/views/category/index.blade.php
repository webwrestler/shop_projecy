@extends('layouts.app')

@section('title')
    Category page
@endsection
@section('content')
    <!-- Banner -->
    <div id="banner">
    </div>
    <!-- /Banner -->
    <!-- Main -->
    <div id="main">
        <!-- Dropdown-->

        <div class="container">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Category
                    <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    @foreach($categories as $category)
                        <li role="presentation"><a role="menuitem" tabindex="-1" name="Bags" href="{{$category->id}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- /Dropdown -->
        <br>

        <div id="portfolio" class="container">
            <div class="row">
                @foreach($categories_products as $categories_product)
                    <section class="3u">
                        <header>
                            <h2>{{$categories_product->title}}</h2>
                        </header>
                        <a href="{{route('product', ['id'=> $categories_product->id])}}" class="image full"><img src="{{asset($categories_product->image)}}" alt=""></a>
                        <p>{{$categories_product->short_description}}</p>
                        <a href="{{route('product', ['id'=> $categories_product->id])}}" class="button">Read More</a>
                    </section>
                @endforeach
            </div>
            {{$categories_products->links()}}
        </div>


        <!-- Welcome -->
        <div id="welcome" class="container">
            <div class="divider"></div>
            <div class="row">
                <section>
                    <header>
                        <h2>Gravida nibh quis urna</h2>
                    </header>
                    <p>This is <strong>Royale</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
                    <p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                </section>
            </div>
        </div>
        <!-- /Welcome -->

    </div>
    <!-- /Main -->
@stop