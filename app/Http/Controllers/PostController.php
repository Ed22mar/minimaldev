<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use AuthorizesRequests;
    public function manage()
    {
        $posts = post::all();
        return view('posts.manage', compact('posts'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::Paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        $post = post::create(
            $request->user()->posts()->validated(),
        );
        return redirect()->route('posts.index',$post)->with('success','Post criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
        $this->authorize('update',$post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, post $post)
    {
        //
        $this->authorize('update', $post);
        $post->update($request->validated());
        return redirect()->route('posts.show', $post)->with('success','Posr actualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
        $post->delete();
        return redirect()->route('posts.index');
    }
}
