<?php

namespace App\Http\Controllers;

use App\Category;
use App\Thread;
use Illuminate\Http\Request;

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
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
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
