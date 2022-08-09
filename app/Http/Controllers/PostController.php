<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = post::where('active', 1)->get();
        $posts = DB::table('posts')
            ->join('categories', 'categories.id', 'posts.category_id')
            ->select('posts.*', 'categories.category_name')
            ->get();
        return view('backend.post.managePost', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('active', 1)->get();
        return view('backend.post.addPost', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //! Validation

    protected function infoValidate($request)
    {
        $validateData = $request->validate([
            'post_name' => 'required|max:100|min:1',
            'post_title' => 'required|max:500|min:1',
            'category_id' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            // 'post_image' => 'required',
            'active' => 'required',
        ]);
    }
    //! Image Upload
    protected function imageUpload($request)
    {
        // $post_image = $request->file('post_image');
        // $img_ext = $post_image->getClientOriginalExtension();
        // $image_name = $request->post_name . '_' . hexdec(uniqid()) . '.' . $img_ext;
        // $directory = 'post_images/';
        // $img_url = $directory . $image_name;
        // $post_image->move($directory, $image_name);
        // return $img_url;



        foreach ($request->file('post_image') as $image) {

            $img_ext = $image->getClientOriginalExtension();
            $name = $request->post_name . '_' . hexdec(uniqid()) . '.' . $img_ext;
            $directory = 'post_images/';
            $url = $directory . $name;

            $image->move(public_path($directory), $name);
            $data[] = $url;
        }
        $img_url = json_encode($data);
        return $img_url;
    }

    //! Info Upload
    protected function infoUpload($request, $post, $img_url)
    {
        // dd($img_url);
        $post->post_name = $request->post_name;
        $post->post_title = $request->post_title;
        $post->category_id = $request->category_id;
        $post->short_description = $request->short_description;
        $post->long_description = $request->long_description;
        $post->post_image = $img_url;
        $post->active = $request->active;
        $post->save();
        return $post;
    }



    public function store(Request $request)
    {
        // return $request->all();
        $post = new Post();

        $this->infoValidate($request);

        $img_url = $this->imageUpload($request);
        // return $request->all();

        // $post->post_name = $request->post_name;
        // $post->post_title = $request->post_title;
        // $post->category_id = $request->category_id;
        // $post->short_description = $request->short_description;
        // $post->long_description = $request->long_description;
        // $post->post_image = $img_url;
        // $post->active = $request->active;
        // $post->save();

        $this->infoUpload($request, $post, $img_url);

        $message = "Post added successfully";
        return redirect('post/manage')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $post = Post::find($id);


        if ($post->active) {

            $post->active = 0;
        } else {

            $post->active = 1;
        }

        $post->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::where('active', 1)->get();
        return view('backend.post.editPost',['post'=>$post,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->infoValidate($request);
        $post = Post::find($request->post_id);

        if ($request->file('post_image')) {
            foreach (json_decode($post->post_image) as $image) {
                # code...
                unlink($image);
            }
            $img_url = $this->imageUpload($request);
        } else {
            $img_url = $post->post_image;
        }


        $this->infoUpload($request, $post, $img_url);

        return redirect('post/manage')->with('message', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);
        foreach (json_decode($post->post_image) as $image){
            unlink($image);
        }

        $post->delete();
        return redirect('post/manage')->with('message', 'Post deleted successfully');
    }
}
