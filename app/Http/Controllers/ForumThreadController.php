<?php

namespace App\Http\Controllers;

use App\Category;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class ForumThreadController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Category $forum
     * @return View
     */
    public function create(Category $forum) {
        return view('thread.create', compact('forum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Redirect
     */
    public function store(Category $forum, Request $request) {
        $data = $this->_validate($request);
        $forum->threads()->create(array_merge($data, ["user_id" => auth()->id()]));
        return redirect(route('forum', $forum->id))->withSuccess('Thread wurde erstellt!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $forum
     * @param Thread $thread
     * @return void
     */
    public function show(Category $forum, Thread $thread) {
        dd([$forum, $thread]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $forum
     * @param Thread $thread
     * @return View
     */
    public function edit(Category $forum, Thread $thread) {
        return view('thread.edit', compact('forum', 'thread'));
    }

    protected function _validate($request) {
        return $this->validate($request, [
            "title" => "required|min:3",
            "body" => "required|min:10"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $forum
     * @param Thread $thread
     * @return Redirect
     */
    public function update(Request $request, Category $forum, Thread $thread) {
        $data = $this->_validate($request);
        $thread->update($data);
        return redirect(route('forum', $forum->id))->withSuccess('Thread wurde bearbeitet!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @param Thread $thread
     * @return void
     */
    public function destroy(Category $category, Thread $thread) {
        //
    }
}
