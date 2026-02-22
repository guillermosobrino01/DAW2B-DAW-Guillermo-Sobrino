@extends('layouts.master')
@section('titulo')
    Pintor {{ $pintor['nombre']  }}
@endsection
@section('contenido')
<div class="container mt-4">
    <h1 class="text-danger">{{ $pintor['nombre'] }}</h1>
    <p><strong>País:</strong> {{ $pintor->pais }}</p>

    <h3 class="mt-4">Cuadros</h3>

    <div class="row">
        @foreach ($pintor->cuadros as $cuadro)
        <div class="col-md-4 mb-4">
            <p>{{ $cuadro->nombre }}</p>
            <div class="card">
                <img src="{{asset('assets/imagenes')}}/{{ $cuadro['imagen'] }}" class="card-img-top" alt="{{ $cuadro->nombre }}">
                <div class="card-body">
                    @foreach ($cuadro->exposiciones as $expo)
                        <p class="card-text text-muted small">{{ $expo->nombre }}</p>
                    @endforeach
                </div>
                @if ($cuadro->disponible)
                    <form action="{{ route('cuadros.cambiarEstado', $cuadro) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger">
                            Marcar como no disponible
                        </button>
                    </form>
                @else
                    <form action="{{ route('cuadros.cambiarEstado', $cuadro) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success">
                            Marcar como disponible
                        </button>
                    </form>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    <a href="{{ route('pintores.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
</div>
@endsection
