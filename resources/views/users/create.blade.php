@extends('layout')

@section('content')
    <h1>Crear Usuario</h1>

    <!-- Notificación de éxito o error -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="formulario">
        @csrf
        <div class="form-group">
            <label for="NomU">Nombre:</label>
            <input type="text" name="NomU" required>
        </div>

        <div class="form-group">
            <label for="ApPa">Apellido Paterno:</label>
            <input type="text" name="ApPa" required>
        </div>

        <div class="form-group">
            <label for="ApMa">Apellido Materno:</label>
            <input type="text" name="ApMa" required>
        </div>

        <div class="form-group">
            <label for="User">Usuario:</label>
            <input type="text" name="User" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="C">Categoría:</label>
            <select name="C" required>
                <option value="">Seleccionar categoría</option>
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria->idC }}">{{ $categoria->Categoria }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn">Crear</button>
        <a href="{{ route('users.index') }}" class="btn btn-volver">
            <i class="fas fa-arrow-left"></i> 
        </a>
    </form>
@endsection
