@extends('plantilla')

@section('menu')
    @include('menu.menuAdmin')
@endSection

@section('contenedorPrincipal')

    @if ($raza[0] === 'pitbull')
        <h1>Raza Pitbull</h1>
    @else
        <h1>Raza diferente a Pitbull</h1>
    @endif




    <select>    
    @foreach($raza as $r)
    <option>{{$r}}</option>
    @endforeach
    </select>
@endSection

@section('footer')
    @include('menu.footer')
@endSection

