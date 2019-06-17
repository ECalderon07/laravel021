@extends('plantilla')

@section('menu')
    @include('menu.menuAdmin')
@endSection

@section('contenedorPrincipal')

    <h1>{{$raza->nombre}}</h1>




<!--    <select>    
    @foreach($raza as $r)
    <option>{{$r}}</option>
    @endforeach
    </select>-->
@endSection

@section('footer')
    @include('menu.footer')
@endSection

