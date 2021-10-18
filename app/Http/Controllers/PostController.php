<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function __construct()
    {
        $this->middleware(
            'permission:post-list|post-create|post-edit|post-delete',
            ['only' => ['index', 'store',]]
        );
        $this->middleware(
            'permission:post-create',
            ['only' => ['create', 'store',]]
        );
        $this->middleware(
            'permission:post-edit',
            ['only' => ['edit', 'update',]]
        );
        $this->middleware(
            'permission:post-delete',
            ['only' => ['delete', 'destroy',]]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required',],
            'body' => ['required',],
        ]);
        $inputs = $request->except(['_token',]);
        Post::create($inputs);
        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => ['required',],
            'body' => ['required',],
        ]);
        $inputs = $request->except(['_token',]);
        $post->update($inputs);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    public function delete(Post $post){
        return true; /* TODO: EXERCISE, Add a delete confirmation page */
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('permissions.index')
            ->with('success','Post deleted successfully');
    }
}
