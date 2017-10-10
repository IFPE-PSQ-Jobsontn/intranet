@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>@lang('labels.users')</h3>
            @php
                if (\Illuminate\Support\Facades\Gate::allows('crud_users')) {
                    echo \Bootstrapper\Facades\Button::primary(Icon::plus() . ' ' . trans('labels.new_user'))->asLinkTo(route('admin.users.create'));
                }
            @endphp
        </div>
        <div class="row">
            {!!
                Table::withContents($users->items())
                ->striped()
                ->callback(trans('labels.actions'), function ($field, $model){
                    $editar = route('admin.users.edit', ['user' => $model->id]);
                    $ver = route('admin.users.show', ['user' => $model->id]);
                    if (\Illuminate\Support\Facades\Gate::allows('crud_users')) {
                        return Button::link(Icon::pencil() . ' ' . trans('labels.edit'))->asLinkTo($editar) . '|'  . Button::link(Icon::search() . ' '. trans('labels.show'))->asLinkTo($ver);
                    } else {
                        return Button::link(Icon::search() . ' '. trans('labels.show'))->asLinkTo($ver);
                    }

                })
            !!}
            {!! $users->links() !!}
        </div>
    </div>

@endsection