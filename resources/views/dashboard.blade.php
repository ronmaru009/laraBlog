@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- {{ __('You are logged in!') }} --}}
                    
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your Blog Post</h3>
                    @if (count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}" class="btn btn-outline-info">Edit</a></td>
                                <td>
                                    <form action="{{url('posts/'.$post->id)}}" method="POST" class="float-end" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete Post</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <h4>You have no post yet</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
