<?php

namespace App\Http\Controllers;

use App\Category;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class ForumThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Category $forum
     * @return View
     */
    public function create(Category $forum)
    {
        return view('thread.create', compact('forum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Category $forum, Request $request)
    {
        $data = $this->validate($request, [
            "title" => "required|min:3",
            "body" => "required|min:10"
        ]);

        auth()->loginUsingId(1);

        $forum->threads()->create(array_merge($data, ["user_id" => auth()->id()]));

        return redirect(route('forum', $forum->id))->withSession('Thread wurde erstellt!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $forum
     * @param Thread $thread
     * @return void
     */
    public function show(Category $forum, Thread $thread)
    {
        dd([$forum,$thread]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     * @param Thread $thread
     * @return void
     */
    public function edit(Category $category, Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @param Thread $thread
     * @return void
     */
    public function update(Request $request, Category $category, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @param Thread $thread
     * @return void
     */
    public function destroy(Category $category, Thread $thread)
    {
        //
    }
}
