@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        
        <form action="{{url('posts')}}" method="POST">
            {!! csrf_field()!!}
            @csrf
            <div class="form-group">
              <label for="Title" class="form-label" placeholder="Title">Post Title:</label>
              <input type="text" class="form-text" id="title" name="title" placeholder="Enter your post title">
            </div> 
            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              <textarea class="form-control" id="body" name="body" rows="3" placeholder="Insert Text Here"></textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
@endsection