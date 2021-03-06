@extends('main')

@section('title', '|Homepage')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my latest story</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div><!-- end of jumbotron-->
        </div><!--end of class col-md-12-->
    </div><!-- end of .header .row -->

    <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)

            <div class="post">
                <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : ""}}</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

              @endforeach

        </div><!--end of col-md-8 class-->

        <div class="col-md-3 col-md-offset-1 ">
            <h2>Sidebar</h2>
        </div>

    </div><!--end of row class-->


   @endsection
