@extends('layouts.app')

@section('content')
    <a href="{{url('posts')}}" class="btn btn-dark">Go back</a>
    <h1>{{$post->title}}</h1>
        
    <div class="container">
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>    

    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
            
            <form action="{{url('posts/'.$post->id)}}" method="POST" class="float-end" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>

        @endif
    @endif
@endsection