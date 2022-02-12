<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <header class="header-page">
        @auth
            <div class="row bg-info py-3">
                <div class="col"></div>

                <h1 class="text-center col">Amazing E-Book</h1>
                
                <div class="col text-center mt-2">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning">Log out</button>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center bg-warning navbar-home align-items-center">
                <a href="/" class="me-3 custom-a-link">Home</a>
                <a href="/cart" class="me-3 custom-a-link">Cart</b>
                <a href="/profile" class="me-3 custom-a-link">Profile</a>
                @if (auth()->user()->role_id === 1)
                    <a href="/acc-maintenance" class="me-3 custom-a-link">Account Maintenance</a>
                @endif
            </div>
        @else
            <div class="row bg-info py-3">
                <div class="col"></div>

                <h1 class="text-center col">Amazing E-Book</h1>
                
                <div class="col text-center mt-2">
                    <a href="/register"><button type="button" class="btn btn-warning">Sign Up</button></a>
                    <a href="/login"><button type="button" class="btn btn-warning me-2">Log In</button></a>
                </div>
            </div>
        @endauth
    </header>

    <div class="container">
        @yield('body')
    </div>

    <div class="container mt-5">
        <footer>
            <p class="text-center text-muted">&copy; Amazing E-book 2022</p>
        </footer>
    </div>
</body>
</html>