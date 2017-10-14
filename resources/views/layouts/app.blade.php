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
            // MENU DINAMICO
            $display_users = \Illuminate\Support\Facades\Gate::allows('r_users');
            $display_roles = \Illuminate\Support\Facades\Gate::allows('r_roles');
            $display_people = \Illuminate\Support\Facades\Gate::allows('r_people');
            // MENU FIXO
            $display_users = true;
            $display_roles = true;
            $display_people = true;
            if (Auth::check()){
                $menu_registration = [
                    [ trans('labels.registration'),
                        [
                            [
                                'link' => route('admin.users.index'),
                                'title' => trans('labels.users'),
                                'linkAttributes' => [
                                    'style' => 'display: ' . ($display_users ? 'block;' : 'none;'),
                                ]
                             ],
                             [
                                'link' => route('admin.roles.index'),
                                'title' => trans('labels.roles'),
                                'linkAttributes' => [
                                    'style' => 'display: ' . ($display_roles ? 'block;' : 'none;'),
                                ]
                             ],
                             [
                                'link' => route('admin.people.index'),
                                'title' => trans('labels.people'),
                                'linkAttributes' => [
                                    'style' => 'display: ' . ($display_people ? 'block;' : 'none;'),
                                ]
                             ],
                        ]
                    ]
                ];
                $links_logado = [
                    [ Auth::user()->name,
                        [
                            [
                                'link' => route('logout'),
                                'title' => trans('labels.exit'),
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

                if ($display_users || $display_roles){
                    $navbar->withContent(Navigation::links($menu_registration));
                }
                $navbar->withContent(Navigation::links($links_logado)->right());
            }
        @endphp
        {!! $navbar !!}
        @if(Auth::check())
            {!! form($formLogout) !!}
        @endif
        @if(Session::has('msg_sucesso'))
            <div class="container">
                {!! Alert::success(Session::get('msg_sucesso'))->close() !!}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
