<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css')}}">

    <title>home @yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <a class="navbar-brand" href="#">َ<img style="margin:0px 20px;width:50px;height:50px;" src="{{ asset('images/qalam icon.png')}}"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a style="font-size:20px;font-weight:bold;" class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></a>
                </li>
                <li style="font-size:20px;font-weight:bold;" class="nav-item">
                  <a class="nav-link" href="{{route('studentsindex')}}">Students</a>
                </li>
            </div>
          </nav>
        </header>
    <main>
        @yield('content')
    </main>
        <footer style="position:fixed;bottom:0;width:100%;padding:10px;" class="bg-info text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3">
              © 2023 Copyright:
              <a class="text-dark" href="https://qalam4edu.com/">qalam4edu.com</a>
            </div>
            <!-- Copyright -->
          </footer>


          <script src="{{ asset('js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('fontawesome-free-6.4.0-web/js/all.min.js') }}"></script>
</body>
</html>
