<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="/css/app.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>

<body>
    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">Ask </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>






    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <!--validation errors-->
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> {{  $error}}</div>

                    @endforeach

                @endif
                <!---Session-->
                @if(session()->has('success'))
                <alert class="alert alert-success d-block"> {{ session()->get('success') }}</alert>
                @endif
                <script>
                    $(function() {
                        var timeout = 2000; // in miliseconds (3*1000)
                        $('.alert').delay(timeout).fadeOut(300);
                        });
                        {{ session()->forget('flashMessage') }}
                </script>
                @yield('content')

            </div>
            <div class="col-md-4 col-lg-4">

            </div>
        </div>

    </div>
</body>

</html>
