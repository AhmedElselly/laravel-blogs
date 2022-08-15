<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Laravel</title>
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-between bg-2B4C59 text-gray-300 h-16 items-center">
        <div class="ml-5">Logo</div>
        <ul class="flex justify-content">
            <li class="mr-5">
                <a class="link" href="/">Home</a>
            </li>
            @auth
            <li class="mr-5">
                <a class="link" href="/create/form">Create</a>
            </li>
            <form action="/logout/user" method="POST" class="inline">
                @csrf
                <button class="mr-6" type="submit">
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
            @else
            <li class="mr-5">
                <a class="link" href="/login">Login</a>
            </li>

            <li class="mr-5">
                <a class="link" href="/register">Signup</a>
            </li>    
            @endauth
            
        </ul>
    </div>
    <main>
        {{$slot}}
    </main>
</body>
</html>