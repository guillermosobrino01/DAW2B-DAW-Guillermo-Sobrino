@extends('layouts.master')
@section('titulo')
    Museo
@endsection
@section('contenido')

<div class="container mt-4">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>País</th>
                <th>Cuadros</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pintores as $pintor)
            <tr>
                <td><a href="{{ route('pintores.mostrar', $pintor->slug) }}">{{ $pintor->nombre }}</a></td>
                <td>{{ $pintor->pais }}</td>
                <td>{{ count($pintor->cuadros) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
