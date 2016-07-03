<?php

namespace App\Http\Controllers;

use App\App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->fill($request->all());
        if ($post->save()) {
            return redirect(route('post.list'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request)
    {
        $post = Post::find($request->get('id'));
        $post->fill($request->all());
        if ($post->save()) {
            return redirect(route('post.list'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('post.list'));
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->get();
        return view('post.trash', compact('posts'));
    }

    public function restore($id)
    {
        Post::where('id', $id)->restore();
        return redirect(route('post.list'));
    }

    public function forceDelete($id)
    {
        $post = new Post;
        $post->where('id', $id)->forceDelete();
        return redirect(route('post.list'));
    }
}
