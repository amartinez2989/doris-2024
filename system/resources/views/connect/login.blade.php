@extends('connect.master')
@section('content_connect')
<div class="box">
    <div class="in">
        <div class="logo">
            <img src="{{url('/static/images/logo_64.png')}}">
        </div>
        <h3>Buenvenido a {{config('cms.app_name')}}  </h3>
        <p>Ingresa a tu cuenta y explora las herramientas</p>
        <div class="form mtop16">
            {!! Form::open(['url' => '/', 'id' => 'form_connect_login']) !!}
            {!! Form::hidden('autocomplete', null, ['class' => 'autocomplete']) !!}

            <label for="email">Correo electrónico:</label>
            {!! Form::text('email', null, ['class' => 'disableac'])!!}
            <label for="password" class="mtop8">Contraseña:</label>
            {!! Form::password('password',['class' => 'disableac'])!!}
                
            {!! Form::submit('Ingresar', ['class' => 'mtop16']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
