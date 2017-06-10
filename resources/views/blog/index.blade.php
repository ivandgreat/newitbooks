@extends('layouts.app')

@section('content')

<main class="container-fluid">

  <div class="container-fluid">
    <div class="jumbotron">
      <h1>Latest blog posts</h1>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
      @foreach ($blogs as $blog)
        <article class="">
          <h2><a href="{{action('BlogController@show',[$blog->id])}}">{{ $blog->title }}</a></h2>
          <p>{{ $blog->body }}</p>
        </article>
      @endforeach
    </div>


  </div>

</main>






@stop
