<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title-block')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container">
    <div class="row">
        <header>
            <h1>Адміністративна панель</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-secondary"><a class="nav-link" href="{{ route('admin-all-salons') }}">Всі салони</a></button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-secondary"><a class="nav-link" href="{{ route('admin-all-services') }}">Всі послуги</a></button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-secondary"><a class="nav-link" href="{{ route('admin-all-appointment') }}">Всі записи</a></button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-secondary"><a class="nav-link" href="/">На сайт</a></button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
        @endif

        @yield('content')
    </div>
</div>
</body>
</html>
