@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Usuário</h3>
            {!!
                form($form->add('btn-salvar','submit',[
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => Icon::check() . ' Salvar',
                ]))
            !!}
        </div>
    </div>

@endsection