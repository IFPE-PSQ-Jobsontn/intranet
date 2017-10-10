@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>@lang('labels.users')</h3>
            {!!
                Button::primary(Icon::plus() . ' ' . trans('labels.new_user'))->asLinkTo(route('admin.users.create'))
            !!}
        </div>
        <div class="row">
            {!!
                Table::withContents($users->items())
                ->striped()
                ->callback(trans('labels.actions'), function ($field, $model){
                    $editar = route('admin.users.edit', ['user' => $model->id]);
                    $ver = route('admin.users.show', ['user' => $model->id]);
                    return Button::link(Icon::pencil() . ' ' . trans('labels.edit'))->asLinkTo($editar) . '|'  . Button::link(Icon::search() . ' '. trans('labels.show'))->asLinkTo($ver);
                })
            !!}
            {!! $users->links() !!}
        </div>
    </div>

@endsection