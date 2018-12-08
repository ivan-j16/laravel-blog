@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:200px; height:180px; float:left; border-radius:50%; margin-right:25px;">
                <h1><strong>{{ $user->name }}</strong>'s Profile</h1>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <h3>Update Profile Image</h3>
                    <div>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>
                        <ul class="pull-right">
                           <li>
                               <label>Save </label> <input type="submit" name="submitbtn" value="original" class="btn btn-sm btn-primary" >
                           </li>
                            <li>
                               <label>Save black and white </label> <input type="submit" name="submitbtn" value="b&w" class="btn btn-sm btn-primary" >
                            </li>
                            <li>
                                <label>Save pixelated </label><input type="submit" name="submitbtn" value="pix" class="btn btn-sm btn-primary" >
                            </li>
                        </ul>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection