@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>@lang('labels.new_user')</h3>
            {!!
                form($form->add('btn-salvar','submit',[
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => Icon::check() . ' ' . trans('labels.save'),
                ]))
            !!}
        </div>
    </div>

@endsection