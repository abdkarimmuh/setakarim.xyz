<?php

namespace App\Http\Controllers;

use App\Model\Blogs;
use App\Model\Categories;
use App\Model\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::all();
        $blogs = Blogs::all();
        $categories = Categories::all();
        $last_blogs = Blogs::all()->sortByDesc('id')->take(3);
        
        return view('blog.index', compact('socials', 'blogs', 'categories', 'last_blogs'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $socials = Social::all();
        $blogs = Blogs::where('category_id', $id)->get();
        $categories = Categories::all();
        $last_blogs = Blogs::all()->sortByDesc('id')->take(3);

        return view('blog.index', compact('socials', 'blogs', 'categories', 'last_blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socials = Social::all();
        $blog = Blogs::find($id);
        $categories = Categories::all();
        $last_blogs = Blogs::all()->sortByDesc('id')->take(3);

        return view('blog.detail', compact('socials', 'blog', 'categories', 'last_blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
