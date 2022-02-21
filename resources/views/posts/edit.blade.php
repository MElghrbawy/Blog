@extends('layouts.app')

@section('title') Edit @endsection

@section('content')
       
    
    
        <form action="{{route('posts.update',$post->id)}}" class="mt-5" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="" value="{{$post->title}}">
    
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10" >{{$post->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="postCreator" class="form-label">Post Creator</label>
                <select name="user_id" class="form-control" id="">
                    @foreach($users as $user){
                        
                        <option value="{{$user->id}}">{{$user->name}}</option>
    
                    }
                    @endforeach
                    
                    
                </select>
    
            </div>
    
            <button type="submit" class="btn btn-success">Submit</button>
    
    
        </form>
@endsection