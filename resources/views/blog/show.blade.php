@extends('layouts.app')

@section('content')

<main class="container-fluid">
  <article>
    <div class="col-sm-12 text-center">
      @if($blog->photo)
          <img style="margin:0 auto; padding-bottom:20px;" class="img-responsive featuted_image" src="/images/{{ $blog->photo ? $blog->photo->photo : '' }}" alt="{{ str_limit($blog->title, 50) }}">
      @endif
    </div>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1>{{ $blog->title }}</h1><a style="float:right" href="{{action('BlogController@edit',[$blog->id])}}">Edit</a>
      </div>
      <div class="col-sm-8 col-sm-offset-2">
          <p>{{ $blog->body }}</p>
          @foreach ($blog->category as $category)
            <p><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></p>
          @endforeach

      </div>
    </article>
  </div>
</main>

@endsection
