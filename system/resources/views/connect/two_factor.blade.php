@extends('connect.master')

@section('content_connect')
    <div class="box">
        <div class="in">
            <div class="logo">
                <img src="{{url('/static/images/logo_64.png')}}">
            </div>
            <h3>¡Hola {{explode(' ', Auth::user()->name)[0]}}! </h3>
            <p>Hemos enviado un código de autenticación de un solo uso a su correo electrónico.</p>
            <p>Es posible que deba revisar su bandeja de spam.</p>
            <div class="form mtop16">
                {!! Form::open(['url' => '/', 'id' => 'form_connect_two_auth', 'autocomplete' => 'off']) !!}
                {!! Form::hidden('autocomplete', null, ['class' => 'autocomplete']) !!}
                <label for="email">Código de autenticación:</label>
                {!! Form::number('code', null, ['class' => 'disableac'])!!}
                {!! Form::submit('Ingresar', ['class' => 'mtop16']) !!}
                {!! Form::close() !!}
                <div class="actions_rigth">
                    <a href="{{ url('/connect/two/factor')  }}" class="mtop16">Enviar de nuevo</a>
                </div>
            </div>
        </div>
    </div>
@endsection