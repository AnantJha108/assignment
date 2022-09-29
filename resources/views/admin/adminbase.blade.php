<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pannel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container mx-auto">
            <a href="" class="navbar-brand">Admin Pannel</a>
            <ul class="navbar-nav items-center">
                @auth('admin')
                    <li class="nav-item"><a href="{{ route('admin.logout') }}" class="btn btn-sm btn-danger ms-2">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>


    @section('content')
    @show
</body>

</html>
