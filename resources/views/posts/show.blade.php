@extends('layouts.app')

@section('content')
    <a href="/first_laravel/public/posts" class="btn btn-primary">Go Back</a>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100%" src="/first_laravel/public/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">
            <h3><a href="posts/{{$post->id}}"> {{$post->title}} </a></h3>
            <small> Written on {{$post->created_at}} by {{$post->user->name}} </small> 
        </div>
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endif
    @endif
@endsection