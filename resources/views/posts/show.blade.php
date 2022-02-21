@extends('layouts.app')

@section('title') Show @endsection

@section('content')
    


<div class="card mt-5">
    <div class="card-header ">
      Post info
    </div>
    <div class="card-body">
      <h5 class="card-title"><b>Title:-</b> {{$post->title}}</h5>
      <p class="card-text"><b>Description:-</b>{{$post->description}}</p>
      
    </div>
  </div>  

  <div class="card mt-5">
    <div class="card-header">
      Post Creator Info
    </div>
    <div class="card-body">
      
      <p class="card-text"><b>Name:-</b> {{$post->user->name}}</p>
      <p class="card-text"><b>Email:-</b> {{$post->user->email}}</p>
      <p class="card-text"><b>Created At:-</b> {{$post->created_at->isoFormat('dddd Do of MMMM OY LTS')}} </p>
      
    </div>
  </div>



    
@endsection