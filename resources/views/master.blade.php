<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.1 with Custom Authentication</title>
    <link href="{{ asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css") }}" rel="stylesheet">
    <style>
        body {
          padding-top: 100px;
          padding-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                @if((Auth::check()))
                    <a class="btn btn-danger" href="/auth/logout">Log Out</a>
                @else
                    <a href="/auth/login" class="btn btn-success">Log In</a>
                    <a href="/auth/register" class="btn btn-primary">Sign Up</a>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @yield('main')
    </div>
</div>
</body>
</html>