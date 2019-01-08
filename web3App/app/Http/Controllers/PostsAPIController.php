<?php

namespace App\Http\Controllers;

use App\Post;
use Validator;
use Illuminate\Http\Request;

class PostsAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required'
        ]);


        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            // Create item

            $post = Post::create($request->all());
//            $post->title = $request->input('title');
//            $post->body = $request->input('body');
//            $post->cover_image = 'noimage.jpg';
//            $post->user_id = $request->input('user_id');
//            $post->save();

            return response()->json($post);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);

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
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required'
        ]);


        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            // Find an item
            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->cover_image = 'noimage.jpg';
            $post->user_id = $request->input('user_id');
            $post->save();

            return response()->json($post);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        $response = array('response' => 'Post deleted', 'success' => true);
        return $response;
    }
}
