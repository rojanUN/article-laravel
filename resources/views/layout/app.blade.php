<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
</head>
<body>
@yield('content')
<div class="mx-auto" style="width:500px">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('dashboard')}}">Article App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">{{auth()->user()->name}}</a>
        </li>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">login</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

@yield('form')
</div>


</body>
</html>