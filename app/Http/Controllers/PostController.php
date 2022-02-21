<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class PostController extends Controller
{

    
    public function index()
    {
        $posts=Post::all();

        $posts = Post::paginate(5);

        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {


        $users = User::all();
        // dd($users);
        return view('posts.create',
    ['users'=>$users]);
    }

    public function show($postId)
    {
        
        $post = Post::find($postId);           
       
        
                return view('posts.show',[
                'post' => $post,
                
                    
            ]);

        
       
    }
    
    
    public function edit($postId)


    {
        // dd($postId);
        $post = Post::find($postId);   
        $users = User::all();       

        return view('posts.edit',[
            'post' => $post,
            'users'=>$users
            
                
        ]);

        
    
    }

    public function store()
    {
        //fetch request data
        $requestData = request()->all();
        //insert into DB



        // dd($requestData);
        Post::create($requestData);


       return redirect()->route('posts.index');
    }

    public function update($postId)
    {
       
        $requestData = request()->all();

        $post = Post::find($postId);
        $post->title = $requestData['title'];
        $post->description = $requestData['description'];
        $post->user_id = $requestData['user_id'];

        
        $post->update();

     
        return redirect()->route('posts.index');
    }

    public function destroy($postId)
    {
       
       

        $post = Post::find($postId);
        $post->delete();
      
      

        
        ;

     
        return redirect()->route('posts.index');
    }
}