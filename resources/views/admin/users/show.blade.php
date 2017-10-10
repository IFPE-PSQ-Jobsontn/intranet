@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>@lang('labels.new_user')</h3>
            @php
                $formDelete = FormBuilder::plain([
                    'id' => 'form-delete',
                    'url' => route('admin.users.destroy',['user' => $user->id]),
                    'method' => 'DELETE',
                    'style' => 'display: none;'
                ]);
                if (\Illuminate\Support\Facades\Gate::allows('crud_users')) {
                    echo Button::primary(Icon::pencil() . ' ' . trans('labels.edit'))
                         ->asLinkTo(route('admin.users.edit',['user' => $user->id]));
                    echo ' ';
                    echo Button::danger(Icon::remove() . ' '. trans('labels.delete'))
                        ->asLinkTo(route('admin.users.destroy',['user' => $user->id]))
                        ->addAttributes(['onclick' => "event.preventDefault(); document.getElementById(\"form-delete\").submit();"]);
                    echo form($formDelete);
                    echo '<br><br>';
                }
            @endphp

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td>{{$user->id}}</td>
                    </tr>
                    <tr>
                        <th scope="row">@lang('labels.name')</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">@lang('labels.email')</th>
                        <td>{{$user->email}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

@endsection