@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>@lang('labels.people')</h3>
            @php
                if (\Illuminate\Support\Facades\Gate::allows('crud_people')) {
                    echo \Bootstrapper\Facades\Button::primary(Icon::plus() . ' ' . trans('labels.new_person'))->asLinkTo(route('admin.people.create'));
                }
            @endphp
        </div>
        <div class="row">
            @if ($people->count() == 0)
                <br>
                {!! Alert::danger(trans('labels.no_records')) !!}
            @else
                {!!
                    Table::withContents($people->items())
                    ->striped()
                    ->callback(trans('labels.actions'), function ($field, $model){
                    $editar = route('admin.people.edit', ['person' => $model->id]);
                    $ver = route('admin.people.show', ['person' => $model->id]);
                    if (\Illuminate\Support\Facades\Gate::allows('crud_people')) {
                    return Button::link(Icon::pencil() . ' ' . trans('labels.edit'))->asLinkTo($editar) . '|'  . Button::link(Icon::search() . ' '. trans('labels.show'))->asLinkTo($ver);
                    } else {
                    return Button::link(Icon::search() . ' '. trans('labels.show'))->asLinkTo($ver);
                    }

                    })
                !!}
            @endif
            {!! $people->links() !!}
        </div>
    </div>

@endsection