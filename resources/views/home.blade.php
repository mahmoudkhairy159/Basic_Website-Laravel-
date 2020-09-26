@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome To Our Site</h1>
    <p class="lead">Welcome to my basic site with laravel</p>
</div>
    <h1 class="alert-primary">Home</h1>
@if (count($messages)>0)
@foreach ($messages as $message)
<div class="card w-100 d-flex justify-content-center flex-sm-wrap" >
    <div class="card-body">
      <h3 class="card-title"> {{  $message->name}} </h3>
      <h6 class="card-subtitle mb-2 text-muted">{{  $message->email}}</h6>
      <p class="card-text">{{ $message->message}}</p>

    </div>
  </div>

@endforeach
@endif

@endsection

