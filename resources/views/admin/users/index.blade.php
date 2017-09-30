@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Usuários</h3>
            {!!
                Button::primary('Novo usuário')->asLinkTo(route('admin.users.create'))
            !!}
        </div>
        <div class="row">
            {!!
                Table::withContents($users->items())
                ->striped()
                ->callback('Ações', function ($field, $model){
                    $editar = route('admin.users.edit', ['user' => $model->id]);
                    $ver = route('admin.users.show', ['user' => $model->id]);
                    return Button::link('Editar')->asLinkTo($editar) . '|'  . Button::link('Ver')->asLinkTo($ver);
                })
            !!}
        </div>
        <div class="row">
            {!! $users->links() !!}
        </div>
    </div>

@endsection