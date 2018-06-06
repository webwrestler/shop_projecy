@extends('layouts.app')

@section('title')
    Home page
@endsection
@section('content')
    <!-- Banner -->
    <div id="banner">
    </div>
    <!-- /Banner -->
    <!-- Main -->
    <div id="main">
        <br>

        <div id="portfolio" class="container">
            <div class="row">
                @foreach($productId as $product)
                    <section class="3u">
                        <header>
                            <h2>{{$product->title}}</h2>
                        </header>
                        <a href="#" class="image full"><img src="{{asset($product->image)}}" alt=""></a>
                        <p>{{$product->description}}</p>
                    </section>
                @endforeach

            </div>
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