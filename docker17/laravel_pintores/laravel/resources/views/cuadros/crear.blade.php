@extends('layouts.master')
@section('titulo')
    Museo
@endsection
@section('contenido')
<body>
    <div class="container mt-5">
        <div class="card" style="max-width: 400px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Añadir nuevo cuadro</h5>

                <form action="{{ route('cuadros.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombreCuadro" class="form-label">Nombre del cuadro</label>
                        <input type="text" class="form-control @error('nombreCuadro') is-invalid @enderror"
                               name="nombreCuadro" value="{{ old('nombreCuadro') }}">
                        @error('nombreCuadro')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pintor" class="form-label">Pintor</label>
                        <select class="form-select @error('pintor_id') is-invalid @enderror"
                                id="pintor" name="pintor_id">
                            @foreach ($pintores as $pintor)
                                <option value="{{ $pintor->id }}"
                                    {{ old('pintor_id') == $pintor->id ? 'selected' : '' }}>
                                    {{ $pintor->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('pintor_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control @error('imagen') is-invalid @enderror"
                               name="imagen">
                        @error('imagen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Añadir cuadro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
