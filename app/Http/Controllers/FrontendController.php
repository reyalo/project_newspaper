<?php

namespace App\Http\Controllers;

use DB;
use App\Models\frontend;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('active', 1)->get();
        $posts = DB::table('posts')
            ->join('categories', 'categories.id', 'posts.category_id')
            ->select('posts.*', 'categories.category_name')
            ->get();
        $posts_trending = Post::orderBy('view_count','DESC')->get();
        // echo $posts_trending;
        // dd();
        return view('frontend.home.index', ['categories' => $categories,'posts' => $posts,'posts_trending'=>$posts_trending]);
        // return view('frontend.home.index');
    }
    public function post_view($id)
    {
        // $post = DB::table('posts')
        //     ->join('categories', 'categories.id', 'posts.category_id')
        //     ->select('posts.*', 'categories.category_name')
        //     ->where('posts.id',$id)
        //     ->get();
        $categories = Category::where('active', 1)->get();

        $posts_trending = Post::orderBy('view_count', 'DESC')->get();
        $post = Post::find($id);
        $post->update(['view_count'=>$post->view_count + 1]);
        // Post::update(['view_count'=>$post->view_count + 1]);
        // $post->view_count = $post->view_count + 1;
        // $post->save();

        return view('frontend.pages.singlepost', ['categories' => $categories, 'post' => $post, 'posts_trending' => $posts_trending]);
        // return view('frontend.pages.singlepost');
    }
    public function category_view($id)
    {
        $categories = Category::where('active', 1)->get();
        $posts = DB::table('posts')
            ->join('categories', 'categories.id', 'posts.category_id')
            ->select('posts.*', 'categories.category_name')
            ->where('posts.category_id',$id)
            ->get();
        $posts_trending = Post::orderBy('view_count', 'DESC')->get();
        // echo $posts_trending;
        // dd();
        return view('frontend.pages.category', ['categories' => $categories, 'posts' => $posts, 'posts_trending' => $posts_trending]);
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
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(frontend $frontend)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(frontend $frontend)
    {
        //
    }
}
