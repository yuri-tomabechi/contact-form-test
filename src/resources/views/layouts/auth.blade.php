<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css')}}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
      @yield('button')
      {{-- @if (Auth::check())
        <form action="/logout" method="post">
            @csrf
            <button class="header-nav__button">logout</button>
        </form>
      @endif --}}
    </div>
    {{-- <a href="{{ route('login') }}" class="login__button">login</a> --}}
  </header>
  

  <main>
    @yield('content')
  </main>
</body>

</html>
