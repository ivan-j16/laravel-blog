<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $users = User::all();

        return view('admin')->with('posts',$posts)->with('users',$users);

    }

    public function destroyPost($id)
    {
        $post = Post::find($id);


        if($post->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('admin')->with('success','Post Removed');

    }
    public function destroyUser($id)
    {
        $user = User::find($id);
        $user->delete();
       // $posts = Post::where('user_id',$user->user_id)->delete();

        return redirect('admin')->with('success','User Removed');

    }

    public function exportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');

    }

    public function exportCSV()
    {
        return Excel::download(new UsersExport, 'users.csv');

    }
}
