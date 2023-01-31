@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        
        <form action="{{url('posts/'.$post->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{-- @method('PUT') --}}
            {!! csrf_field()!!}
            @csrf
            <div class="form-group">
              <label for="Title" class="form-label" placeholder="Title">Post Title:</label>
              <input type="text" class="form-text" id="title" name="title" value="{{$post->title}}">
            </div> 
            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              <textarea class="form-control" id="body" name="body" >{{$post->body}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-secondary">Update</button>
        </form>
    
@endsection