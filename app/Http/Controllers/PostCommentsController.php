<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post, Request $request)
    {
        request()->validate(['body' => 'required']);
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        /*
         * Never ever do the ff, be explicit.
         * $post->comments()->create(request()->all());
         * */

        return back();
    }
}
