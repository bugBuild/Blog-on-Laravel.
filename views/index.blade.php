@extends('layout')

@section('title')
    Bubel Blog
@endsection

@section('main_section')
    @foreach($posts as $post)
        <div class="container text-light border border-warning rounded p-3 w-75 mt-3">
            <h1 class="display-5  text-center">{{$post->title}}</h1>
            <h2 class="display-6 text-center">{{$post->subject}}</h2>
            <p>{{$post->post}}</p>
            <p class="text-right text-warning">Created by: {{trim($post->author, "'")}}.</p>
        </div>
    @endforeach
@endsection
