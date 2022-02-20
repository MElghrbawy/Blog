<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public $posts = [
        ['id' => 1, 'title' => 'first post', 'posted_by' => 'ahmed', 'created_at' => '2022-02-19 10:00:00'],
        ['id' => 2, 'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-02-15 05:00:00'],
    ];

    public function index()
    {
        

        // dd($posts); //to stop excution and dump the $posts
        return view('posts.index',[
            'posts' => $this->posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($postId)
    {
        
        $posts = [
            ['id' => 1, 'title' => 'first post', 'posted_by' => 'ahmed', 'created_at' => '2022-02-19 10:00:00'],
            ['id' => 2, 'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-02-15 05:00:00'],
        ];            
       
        foreach($posts as $post){
            if ($post['id'] == $postId )
                return view('posts.show',[
                'name' => $post['posted_by'],
                'createdAt' => $post['created_at']
                    
            ]);

        }
       
    }
    
    
    public function edit($postId)


    {
        // dd($postId);
        $posts = [
            ['id' => 1, 'title' => 'first post', 'posted_by' => 'ahmed', 'created_at' => '2022-02-19 10:00:00'],
            ['id' => 2, 'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-02-15 05:00:00'],
        ];            
        
        foreach($posts as $post){
            if ($post['id'] == $postId )
                return view('posts.edit',[
                'title' => $post['title'],
                'name' => $post['posted_by'],
                'createdAt' => $post['created_at']
                    
            ]);

        }

        return view('posts.edit');
       
    
    }

    public function store()
    {
        //fetch request data
        $requestData = request()->all();
       // create new ID
       $newID = sizeof($this->posts) + 1;

       //store request data in db
       $newPost =  ['id' => $newID, 'title' => $requestData['title'], 'description' => $requestData['description'], 'posted_by' => $requestData['Post_Creator'], 'created_at' => '10/10/2020'];

       // store new post on array
       array_push($this->posts, $newPost);
       return view('posts.index', [
        'posts' =>  $this->posts
    ]);
    }

    public function update()
    {
       
        $requestData = request()->all();
     
        return redirect()->route('posts.index');
    }
}