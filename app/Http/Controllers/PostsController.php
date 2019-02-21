<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('post_type', 'post')->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and filter user inputted data
        // Refer to `References` for more info
        $this->validate($request, [
            'post_title' => 'required',
            'post_slug' => 'required|alpha_dash|max:200|unique:posts,post_slug',
            'post_content' => 'required',
        ]);

        // Create a new Post Model initialization
        // There are many ways to coke an Egg and same in storing data to database in Laravel
        // You might use or prefer this one https://laravel.com/docs/5.4/queries#inserts
        // I just love using Eloquent
        $post = new Post;

        $post->user_id = $request->user_id;
        $post->post_type = $request->post_type;
        $post->post_title = $request->post_title;
        $post->post_slug = $request->post_slug;
        $post->post_content = $request->post_content;
        $post->category_id = $request->category_id;

        $post->save();

        $notification = [
            'message' => 'SUCCESS: Post has been created successfully!',
            'alert-type' => 'success'
        ];

        // Redirect to `posts.show` route
        // Use route:list to view the `Action` or where this routes going to
        // return redirect()->route('posts.show', $post->id);
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request;
        $this->validate($request, [
            'post_title' => 'required',
            'post_slug' => 'required|alpha_dash|max:200|unique:posts,post_slug,' . $id,
            'post_content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->user_id = $request->input('user_id');
        $post->post_type = $request->input('post_type');
        $post->post_title = $request->input('post_title');
        $post->post_slug = $request->input('post_slug');
        $post->post_content = $request->input('post_content');
        $post->category_id = $request->input('category_id');
        $post->save();
        $notification = [
            'message' => 'SUCCESS! Post has been updated successfully.',
            'alert-type' => 'success'
        ];
        return redirect()->route('posts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $notification = [
            'message' => 'ALERT: Post has been deleted successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('posts.index')->with($notification);
    }
}
