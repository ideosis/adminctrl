<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
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
        // Fetch records in pagination so only 10 pages per page
        // To get all records you may use get() method
        $pages = Post::where('post_type', 'page')->get();

        return view('pages.index', compact('pages'));
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
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug',
            'post_content'      => 'required',
        ]);

        // Create a new Post Model initialization
        // There are many ways to coke an Egg and same in storing data to database in Laravel
        // You might use or prefer this one https://laravel.com/docs/5.4/queries#inserts
        // I just love using Eloquent
        $page = new Post;

        $page->user_id        = $request->user_id;
        $page->post_type        = $request->post_type;
        $page->post_title       = $request->post_title;
        $page->post_slug        = $request->post_slug;
        $page->post_content     = $request->post_content;

        $page->save();
        
        $notification = [
            'message' => 'SUCCESS! Page has been created successfully.',
            'alert-type' => 'success'
        ];
        // Redirect to `pages.show` route
        // Use route:list to view the `Action` or where this routes going to
        // return redirect()->route('pages.show', $page->id)->with($notification);
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
        $page = Post::findOrFail( $id );

        return view('pages.edit', compact('page'));
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
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug,'.$id,
            'post_content'      => 'required',
        ]);

        // You might prefer to use this one instead https://laravel.com/docs/5.4/queries#updates
        // You choose
        $page = Post::findOrFail($id);

        $page->user_id        = $request->input('user_id');
        $page->post_type        = $request->input('post_type');
        $page->post_title       = $request->input('post_title');
        $page->post_slug        = $request->input('post_slug');
        $page->post_content     = $request->input('post_content');

        $page->save();
        $notification = [
            'message' => 'SUCCESS! Page has been updated successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->route('pages.edit', $id)->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Post::findOrFail( $id );
        $page->delete();
        $notification = [
            'message' => 'ALERT: Page has been deleted successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('pages.index')->with($notification);
    }
}
