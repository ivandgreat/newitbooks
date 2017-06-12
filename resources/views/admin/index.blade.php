@extends('layouts.app')

@section('content')

<main class="container-fluid">

  <div class="container-fluid">
    <div class="jumbotron">
      <h1>Admin Dashboard</h1>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
      <button class="btn btn-primary link"><a style="color:#fff;" href="{{ url('/blog/create') }}">Create Blog</a></button>
      <button class="btn btn-danger link"><a style="color:#fff;" href="{{ url('/blog/bin') }}">Trashed Blog</a></button>

    </div>


  </div>

</main>






@stop
