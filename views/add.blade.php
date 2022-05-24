@extends('layout')

@section('title')
    Add post
@endsection

@section('main_section')
    <div class="container p-3">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Cookie::get('user') != '')
        <h1 class="text-light">Add new post</h1>
        <form action="" method="post" class="md-form w-75">
            @csrf

            <input type="text" name="title" id="title" class="form form-control my-3 border-warning" placeholder="Title">

            <div class="my-4"></div>

            <input type="text" name="subject" id="subject" class="form form-control my-3" placeholder="Subject">
            <textarea type="text" name="post" id="post" class="form form-control my-3" placeholder="Post text"></textarea>


            <button type="submit" class="btn btn-success my-3">Submit</button>
        </form>
            @else
        <h1 class="display-6">You need to login to add post :)</h1>
            @endif
    </div>
@endsection
