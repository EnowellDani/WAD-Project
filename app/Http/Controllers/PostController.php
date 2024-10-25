<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        DB::table('posts')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created!');
    }

    public function show($id)
    {
        $post = DB::table('posts')->find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found.');
        }

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('posts')->find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found.');
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        DB::table('posts')
           ->where('id', $id)
           ->update([
               'title' => $request->title,
               'content' => $request->content,
               'updated_at' => now()
           ]);

        return redirect()->route('posts.show', $id)->with('success', 'Post updated!');
    }
}
