<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    public function profile(){
        return view('profile', array('user'=>Auth::user()));
    }

    public function update_avatar(Request $request){
        // Handle the user upload of avatar

        switch($request->submitbtn) {

            case 'original':
                if($request->hasFile('avatar')){
                    $avatar = $request->file('avatar');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

                    $user = Auth::user();
                    $user->avatar = $filename;
                    $user->save();
                }
                break;

            case 'b&w':
                if($request->hasFile('avatar')){
                    $avatar = $request->file('avatar');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(300, 300)->greyscale()->save( public_path('/uploads/avatars/' . $filename ) );

                    $user = Auth::user();
                    $user->avatar = $filename;
                    $user->save();
                }
                break;

            case 'pix':
                if($request->hasFile('avatar')){
                    $avatar = $request->file('avatar');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(300, 300)->pixelate(12)->save( public_path('/uploads/avatars/' . $filename ) );

                    $user = Auth::user();
                    $user->avatar = $filename;
                    $user->save();
                }
                break;
        }

        return view('profile', array('user' => Auth::user()) );
    }
}
