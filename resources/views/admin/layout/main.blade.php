<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>

</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }


    .body {
        margin: 0px;
        padding: 0px;
        height: 110%;
        width: 100%;
    }

    li {
        color: white;
        display: inline;
        padding: 20px 60px;
        margin-left: 50px;


    }
    .nav{
        background-color: #333333;
        height: 60px;
    }

    .logo {
        font-weight: bold;
        font-size: 30px;
        display: inline;
        margin: 10px;
        color: white;
    }


    a {

        color: white;
        text-decoration: none;

    }

    ul {
        padding: 0;
    }
</style>

<body>
    <div class="container" id="container-nav">
        <div class="nav">
            <ul>

                <span class="logo"><a href="/">Dashboard </a></span>
                <li><a href="/category">Category</a></li>
                <li><a href="/product">Products</a></li>
                <li><a href="/order">Order</a></li>
                <li><a href=""></a> </li>

                @if(auth()->user())
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a> </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif


            </ul>
        </div>
    </div>

    @yield('content')

</body>

</html>