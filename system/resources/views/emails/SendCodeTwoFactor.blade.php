@extends('emails.master')

@section('content')
    <h2>¡Hola {{$name}}!</h2>
    <p>Este es tu código de doble factor para {{ config('cms.app_name') }}</p>
    <p style="
        background-color: #f0f0f0;
        border: 1px solid #e6e6e6;
        color: #222;
        display: inline-block;
        font-size: 26px;
        font-weight: bold;
        margin: 0px;
        padding: 16px 32px;
    ">{{ $code }}</p>
@endsection