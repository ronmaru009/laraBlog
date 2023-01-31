@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>Posts</h1>
        @if (count($posts)>0)
           @foreach ($posts as $post)
               <div class="card mb-3 ">
                   <div class="card-body bg-light">
                     <h3>
                         <a href="/posts/{{$post->id}}" class="text-decoration-none link-info">{{$post->title}}</a>
                     </h3>
                     <small>
                         Written on {{$post->created_at}} by {{$post->user->name}}
                     </small>
                   </div>
               </div>
           @endforeach 
            {{$posts->links('pagination::bootstrap-5')}}
        @else
            <p> No Post Found</p>     
            
        @endif
    </div>
@endsection