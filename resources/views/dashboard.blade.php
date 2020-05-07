@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="posts/create" class="btn btn-primary">Creat post</a>
                    <h3> Your Posts </h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                                <th>
                                    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                </th>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p> You don't have posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
