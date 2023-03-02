<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('admin.pages.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.pages.post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);
        $gambar = $request->file('gambar');
        $newGambar = time() . $gambar->getClientOriginalName();
        $post = Post::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => 'public/uploads/post/' . $newGambar
        ]);
        $gambar->move('public/uploads/post/' . $newGambar);

        return redirect()->route('post.index')->with('status', 'Postingan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
