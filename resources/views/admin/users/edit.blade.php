@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Usuário</h3>
            {!!
                form($form->add('btn-editar','submit',[
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => Icon::edit() . ' Alterar',
                ]))
            !!}
        </div>
    </div>

@endsection