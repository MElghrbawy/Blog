@extends('layouts.app')

@section('title') Show @endsection

@section('content')
    


<div class="card mt-5">
    <div class="card-header ">
      Post info
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      
    </div>
  </div>

  <div class="card mt-5">
    <div class="card-header">
      Post Creator Info
    </div>
    <div class="card-body">
      
      <p class="card-text"><b>Name:-</b> {{$name}}</p>
      <p class="card-text"><b>Email:-</b> {{$name."@gmail.com"}}</p>
      <p class="card-text"><b>Created At:- {{$createdAt}}</b> </p>
      
    </div>
  </div>



    
@endsection