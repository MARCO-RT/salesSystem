@extends('layaout.base')

@section('title')
    <h1> registro de clientes </h1>
@stop

@section('content')

    @parent
    {{$dato->nombres}}
    <br>
    {{$dato->apellidos}}

@stop

