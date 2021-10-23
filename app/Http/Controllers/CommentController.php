<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // fatty model thin controller

    // DRY

    // Service layer in MVC pattern

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $comment = Comment::create($request->validate([
            'body' => 'required',
            'user_id' => 'required',
            'post_id' => 'required',
        ]));
        return response()->json(['data' => $comment->refresh()], 201);

        /*$comment = Comment::create([
           'body'=>$request->body,
           'user_id' => Auth::id(),
           'post_id' => $post->id,
        ]);

        $comment = Auth::user()->comments()->create([
            'body'=>$request->body,
            'post_id' => $post->id,
        ]);

        $comment = $post->comments()->create([
            'body'=>$request->body,
            'user_id' => Auth::id(),
        ]);

        $comment = new Comment;
        $comment->body = $request->body;
        $comment->save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
