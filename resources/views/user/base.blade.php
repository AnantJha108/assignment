<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container mx-auto">
            <a href="" class="navbar-brand">Details</a>
            <ul class="navbar-nav items-center">
                @guest
                    <li class="nav-item"><a href="{{ route('user.create') }}" class="btn btn-sm btn-primary ms-2">Signup</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-sm btn-success ms-2">Login</a></li>
                @endguest
                @auth
                    <a href="" class="nav-item nav-link text-white me-3">{{ Auth::user()->name }}`s  Account</a>
                    <li class="nav-item"><a href="{{route('logout')}}" class="btn btn-sm btn-danger ms-2">Logout</a></li>
                @endauth
            </ul>
        </div>
    </nav>


    @section('content')
    @show

</body>

</html>
