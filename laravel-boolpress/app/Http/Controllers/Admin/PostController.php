<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::all();

        return view("admin.posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $tags = Tag::all();

        return view("admin.posts.create", compact("tags"));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->validate([
            "title" => "required|min:5",
            "content" => "required|min:20",
            "tags" => "nullable"
        ]);

        $post = new Post();
        $post->fill($data);

        $post->save();

        $post->tags()->attach($data["tags"]);

        return redirect()->route("admin.posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = Post::findOrFail($id);

        return view("admin.posts.show", compact("post"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $post = Post::findOrFail($id);

        $tags = Tag::all();



        return view("admin.posts.edit", [
            "post" => $post,
            "tags" => $tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = $request->all();
        $post = Post::findOrFail($id);

        $post->update($data);

        if (key_exists("tags", $data)) {
            $post->tags()->sync($data["tags"]);
        }

        return redirect()->route("admin.posts.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
