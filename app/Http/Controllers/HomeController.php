<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $nodes = Category::get()->toTree();

        $traverse = function ($categories, $prefix = '-') use (&$traverse)
        {
            foreach ($categories as $category) {
                echo PHP_EOL . $prefix . ' ' . $category->name."<br>";

                $traverse($category->children, $prefix . '-');
            }
        };

        echo "<code>";
        $traverse($nodes);
        echo "</code>";

    }
}
