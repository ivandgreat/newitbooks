@extends('layouts.app')

@section('content')

<main class="container-fluid">

  <div class="container-fluid">
    <div class="jumbotron">
      <h1>Deleted blog posts</h1>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
      @foreach ($deletedBlogs as $blog)
        <article>
          <h2>{{ $blog->title }}</h2>
          <p>{{ $blog->body }}</p>
          {!!Form::open(['method'=>'GET', 'action'=>['BlogController@restore',$blog->id]])!!}
            <div class=form-group"">
              {!!Form::submit("Restore Blog",['class'=>'btn btn-primary'])!!}
            </div>
          {!!Form::close()!!}

          {!!Form::open(['method'=>'DELETE', 'action'=>['BlogController@destroyBlog',$blog->id]])!!}
            <div class="form-group">
              {!!Form::submit("Destroy Blog", ['class'=>'btn btn-danger'])!!}
            </div>
          {!!Form::close()!!}
        </article>
      @endforeach
    </div>


  </div>

</main>






@stop
