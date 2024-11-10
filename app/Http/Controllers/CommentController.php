<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentRequest $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $comment = new Comment($request->validated());
        $comment->blog_id = $blog->id;
        $comment->save();

        return redirect()->route('blog.show', ['slug' => $slug])->with('success', 'Comment added successfully!');
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->with('comments')->firstOrFail();

        return view('blog.show', compact('blog'));
    }
}
