<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Интерфейс для поиска, чтения и размещения инструкций для техники">
    <meta name="author" content="ProRock">
    <title>@yield('title')</title>
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('/css/favicon.ico') }}" type="image/x-icon">
    <base href="/" />
</head>
<body>
    <header class="container bg-primary">
        <div class="row">
            <div class="col-3">
                <a href="{{asset('')}}"><i class="fas fa-home icon"></i></a>
            </div>
            <div class="col-6">
                <form class="input-group" method="get" action="{{asset('instruction/search')}}">
                    <input class="form-control" required type="search" name="searchText" id="searchText">
                    <input class="btn btn-success" type="submit" value="Поиск">
                </form>
            </div>
            <div class="col-3 d-flex justify-content-around">
                @if (session('user', '') != '')
                    <h4>{{session('user')}}</h4>
                    @if (session('user') == 'admin')
                        <a href="{{ asset('admin') }}"><i class="fas fa-user-cog icon"></i></a>
                    @endif
                    <form action="{{ asset('user/logout') }}" method="get">
                        <button class="nav-btn" type="submit"><i class="fas fa-sign-out-alt icon"></i></button>
                    </form>
                @else
                    <a href="{{ asset('user/login') }}"><h4>Вход</h4></a>
                    <a href="{{ asset('user/create') }}"><h4>Регистрация</h4></a>
                @endif
            </div>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="container bg-primary">
        <div class="row">
            <div class="text-center">
                <h5>Автор: Алексей Черников. 2023</h5>
            </div>
        </div>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>
