<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Image upload in Laravel 5.2 with Dropzone.js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="{{ asset('/packages/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('https://code.jquery.com/jquery-2.1.4.min.js') }}" rel="stylesheet">
    
    
    
    
    @yield('head')

</head>

<body>

<div class="container">

    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Dropzone + Laravel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Upload</a></li>
                <li><a href="/example-2">Upload-2</a></li>
                <li><a href="/example-3">Upload-3</a></li>
            </ul>
        </div>
    </div>

    <br><br>

@yield('content')

</div>
</body>

@yield('footer')
</html>
