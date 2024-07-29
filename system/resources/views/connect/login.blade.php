@extends('connect.master')

@section('content_connect')
<div class="box">
    <div class="in">
        <div class="logo">
            <img src="{{url('/static/images/logo_64.png')}}">
        </div>
    </div>
    <h3>Buenvenido a {{config('cms.app_name')}}  </h3>
    <div class="form mtop16">
        {!! Form::open(['url' => '/', 'id' => 'form_connect_login', 'autocomplete' => 'off']) !!}
        {!! Form::hidden('autocomplete', null, ['class' => 'autocomplete']) !!}

        <label for="email">Correo electrónico:</label>
            {!! Form::email('email', null, ['class' => 'disableac'])!!}
        <label for="password">Contraseña:</label>
            {!! Form::password('password', ['class' => 'disableac'])!!}
            
        {!! Form::submit(__('Ingresar'), ['class' => 'mtop16']) !!}
        {!! Form::close() !!}
    </div>
@endsection
