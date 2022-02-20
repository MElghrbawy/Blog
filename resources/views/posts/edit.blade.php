@extends('layouts.app')

@section('title') Edit @endsection

@section('content')
       
    <form action="{{route('posts.store')}}" class="mt-5" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Title</label>
            <input type="text" class="form-control" name="email" id="" value="{{$title}}">

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
<textarea name="description" class="form-control" id="" cols="30" rows="10">{{$createdAt}}</textarea>
        </div>
        <div class="mb-3">
            <label for="postCreator" class="form-label">Post Creator</label>
            <select name="postCreator" class="form-control" id="">
                <option value="1">Sayed</option>
                <option value="2">Ismael</option>
                <option value="3">Mahmoud</option>
            </select>

        </div>

        <button type="submit" class="btn btn-success">Submit</button>


    </form>
@endsection