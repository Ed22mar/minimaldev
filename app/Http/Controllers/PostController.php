<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
            $request->validated(),
        );
        return redirect()->route('posts.index',$post)->with('success','Post criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
