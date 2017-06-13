@extends('layouts.app')
@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit blog post</h1>
        </div>
        <div class="col-sm-10 col-sm-offset-1">
            {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update', $blog->id], 'files' => true ]) !!}
                <div class="form-group">

                    {!! Form::label("title", "Title:") !!}
                    {!! Form::text("title", null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("body", "Body:") !!}
                    {!! Form::textarea("body", null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("photo_id", "Featured Image:") !!}
                    {!! Form::file("photo_id", ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("category_id", "Category:") !!}
                    {!! Form::select("category_id[]", $categories, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit("Edit Blog", ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroy', $blog->id]]) !!}
                <div class="form-group">
                    {!! Form::submit("Delete Blog", ['class' => 'btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

</main>

@include('partials.select-2-script')

@endsection
