@extends('layouts.app')
        
@section('content')
    
{{-- <main class="flex-shrink-0"> --}}
    
        <div class="mt-4 p-5 bg-transparent rounded text-white" id="indexBg">
            <div class="justify-content-center">
                <h1 class="display-4 text-center" >Welcome to LaraBlog</h1>
                <p class="lead text-center">A simple blog site made with Laravel 9 demonstrating the basic CRUD Functionalities.  </p>
            </div>
            {{-- <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/login" role="button">Register</a>
            </p> --}}
        </div>
    
{{-- </main>    --}}

@endsection
