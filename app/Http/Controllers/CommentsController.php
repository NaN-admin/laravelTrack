<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComment;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post, StoreComment $request) {
        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $post->id 
        ]);
        return back();
    }
}
