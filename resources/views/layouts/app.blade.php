<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @php
            $navbar = Navbar::withBrand(config('app.name'))->inverse();
            if (Auth::check()){
                $links_admin = [
                    [ 'Cadastro',
                        [
                            ['link' => route('admin.users.index'), 'title' => 'Usuários'],
                        ]
                    ]
                ];
                $links_logado = [
                    [ Auth::user()->name,
                        [
                            [
                                'link' => route('logout'),
                                'title' => 'Sair',
                                'linkAttributes' => [
                                    'onclick' => "event.preventDefault(); document.getElementById(\"form-logout\").submit();"
                                ]
                            ]
                        ]
                    ]
                ];
                $formLogout = FormBuilder::plain([
                    'id' => 'form-logout',
                    'url' => route('logout'),
                    'method' => 'POST',
                    'style' => 'display: none;'
                ]);
                form($formLogout);
                $navbar->withContent(Navigation::links($links_admin))
                       ->withContent(Navigation::links($links_logado)->right());
            }
        @endphp
        {!! $navbar !!}
        @if(Auth::check())
            {!! form($formLogout) !!}
        @endif
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
