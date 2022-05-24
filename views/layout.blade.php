<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title> @yield('title') </title>
</head>
<body class="bg-dark">
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-dark">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
           <p class="display-6 text-light">Bubel blog</p>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-light">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-light">Features</a></li>
            <li><a href="#" class="nav-link px-2 link-light">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 link-light">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 link-light">About</a></li>
        </ul>
        @if(\Illuminate\Support\Facades\Cookie::get('user') != '')
            <div class="col-md-3 text-end">
                <a type="button" class="btn btn-outline-primary me-2" href="/addPost">Add post</a>
                <a type="button" class="btn btn-outline-primary me-2" href="/signOut">Sign out, {{trim(\Illuminate\Support\Facades\Cookie::get('user'), "'")}}.</a>
            </div>
        @else
        <div class="col-md-3 text-end">
            <a type="button" class="btn btn-outline-primary me-2" href="/login">Login</a>
            <a type="button" class="btn btn-primary" href="/signup">Sign-up</a>
        </div>
        @endif
    </header>
</div>
<div class="container">

    @yield('main_section')
</div>
</body>
</html>
