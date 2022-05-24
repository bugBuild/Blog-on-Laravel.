@extends('layout')

@section('title')
    Sign-up
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

    <h1 class="text-light">Create new account:</h1>
    <form action="" method="post" class="md-form w-75">
        @csrf

        <input type="text" name="username" id="username" class="form form-control my-3 border-warning" placeholder="Username">

        <div class="my-4"></div>
        <input type="password" name="password" id="password" class="form form-control my-3" placeholder="Password">


        <button type="submit" class="btn btn-success my-3">Submit</button>
    </form>
</div>
@endsection
