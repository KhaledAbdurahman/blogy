<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'posted_by' => 'Khaled', 'created_at' => '2025-4-5 08:00:00'],
            ['id' => 2, 'title' => 'C++', 'posted_by' => 'Mohammed', 'created_at' => '2025-2-22 12:00:00'],
            ['id' => 3, 'title' => 'Python', 'posted_by' => 'Saleh', 'created_at' => '2025-1-14 04:00:00'],
            ['id' => 4, 'title' => 'HTML', 'posted_by' => 'Ali', 'created_at' => '2025-3-1 11:00:00'],
        ];
        return view('posts/index', ['posts' => $allPosts]);
    }

    public function show($postID)
    {
        $singlePost = [
            'id' => 1,
            'title' => 'PHP',
            'description' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'posted_by' => 'Khaled',
            'email' => 'khaledalahdal@gmail.com',
            'created_at' => '2025-4-5 08:00:00',
        ];

        return view('posts.show', ['post' => $singlePost]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //1- get the user data.
        //2- store the user data in the database.
        //3- redirect the user to the posts page.

        //$request = request();
        //@dd($request->title, $request->all());

        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        dd($title, $description, $post_creator);

        
        return to_route('posts.index');
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function update()
    {
        //$data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        //dd($title, $description, $post_creator);

        
        return to_route('posts.show', 1);
    }

    public function destroy()
    {
        //return 'delete post';
        return to_route('posts.index');
    }

}
