<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div id="menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                @auth
                    <li>
                        <a href="javascript:void(0)" onclick="event.preventDefault(); confirm('Are you sure?') && document.getElementById('logout-form').submit();">Logout</a>
                        <form style="display: none;" id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                @endauth
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endguest
            </ul>
        </div>
        {{ $slot }}
    </body>
</html>
