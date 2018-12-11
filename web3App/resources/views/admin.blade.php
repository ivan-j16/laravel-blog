@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="card-header">ADMIN Dashboard</div>
                        <h3>Your Blog Posts</h3>

                    <a class="btn btn-primary" href="{{action('AdminController@exportExcel')}}" role="button">Users to excel</a>
                    <a class="btn btn-primary" href="{{action('AdminController@exportCSV')}}" role="button">Users to csv</a>


                @if(count($posts)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Post Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            {!! Form::open(['action' => ['AdminController@destroyPost',$post->id], 'method' => 'POST','class' => 'float-right']) !!}

                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}

                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif

                    @if(count($users)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Users</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td><p>{{$user->name}}</p>{{$user->email}}</td>
                                    <td>
                                        {!! Form::open(['action' => ['AdminController@destroyUser',$user->id], 'method' => 'POST','class' => 'float-right']) !!}

                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no users</p>
                    @endif

                    <div class="card-body">
                        You are logged in as <strong>ADMIN</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
