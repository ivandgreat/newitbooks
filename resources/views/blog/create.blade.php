@extends('layouts.app')

@section('content')

<main class="container">
  <div class="container-fluid">
    <div class="jumbotron">
      <h1>Create a blog posts</h1>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
      {!! Form::open(['method'=>'POST','action'=>'BlogController@store', 'files'=>true]) !!}
        <div class="form-group">
          {!! Form::label("title","Title:") !!}
          {!! Form::text("title",null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label("body","Body:") !!}
          {!! Form::textarea("body",null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label("photo_id", "Featured Image:") !!}
          {!! Form::file("photo_id", ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label("category_id", "Category:") !!}
          {!! Form::select("category_id[]",$categories,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit("Create a Blog",['class'=>'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</main>

@include('partials.select-2-script')

@endsection
