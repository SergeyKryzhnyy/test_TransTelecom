<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>test task</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="header bg-warning text-dark">
    <div class="row">
        <div class="col-2">
            <h1>Test-task</h1>
        </div>

                @if (Auth::user())
                    @auth
                    <div class="col-4 d-flex justify-content-end">
                        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">вы вошли, как {{Auth::user()->name}}</a>
                        <a class="btn btn-primary" href="{{ route("logout") }}" role="button">Выйти</a>
                    </div>
                    @endauth
                @else
            <div class="col-7 d-flex justify-content-end">
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                    </div>
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-8">
            <h1>Последние сообщения:</h1>
            <div class="container">

                @foreach ($messages as $message)
                    <div class="row">
                        {{ $message->message }}
                        автор:
                        @foreach($user_names as $name)
                            @if($name->id == $message->id_user)
                                {{$name->name}}
                            @endif

                        @endforeach

                        @if(Auth::id() == 1)
                            <div class="row">
                                <div class="col-1">
                                    <a class="btn btn-primary" href="/delMessage{{$message->id}}" role="button">Удалить</a>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-1">
                                    <form action="/changeMessage{{$message->id}}" method="post">
                                        @csrf
                                        Редактировать сообщение
                                        <input name="changeMessage">
                                        <button type="submit">Сохранить</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                        @if(session('user_timeout'))
                            @if($message->id_user == Auth::id())
                                <div class="row">
                                    <div class="col-1">
                                        <a class="btn btn-primary" href="/delMessage{{$message->id}}" role="button">Удалить</a>
                                    </div>
                                    <div class="col-1">
                                    </div>
                                    <div class="col-1">
                                        <form action="/changeMessage{{$message->id}}" method="post">
                                            @csrf
                                            Редактировать сообщение
                                            <input name="changeMessage">
                                            <button type="submit">Сохранить</button>
                                        </form>
                                    </div>
                                </div>

                            @endif
                        @endif
                    </div>
                @endforeach

            </div>


        </div>

        <div class="col-4">
            <h1>Добавить новое сообщение:</h1>
            <form method="post" action="newMessage">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Новое сообщение</label>
                    <input name="newMessage" class="form-control" id="newMessage" placeholder="Введите текст нового сообщения">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-1">
{{ $messages->links() }}
{{--        {{$messages->appends(['sort'=>request()->sort])->links()}}--}}
    </div>
</div>
</body>
</html>
