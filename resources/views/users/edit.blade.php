@extends('layout')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->Idu) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NomU">Nombre:</label>
            <input type="text" name="NomU" value="{{ $user->NomU }}" required>
        </div>

        <div class="form-group">
            <label for="ApPa">Apellido Paterno:</label>
            <input type="text" name="ApPa" value="{{ $user->ApPa }}" required>
        </div>

        <div class="form-group">
            <label for="ApMa">Apellido Materno:</label>
            <input type="text" name="ApMa" value="{{ $user->ApMa }}" required>
        </div>

        <div class="form-group">
            <label for="User">Usuario:</label>
            <input type="text" name="User" value="{{ $user->User }}" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" placeholder="Dejar en blanco si no desea cambiarla">
        </div>

        <button type="submit" class="btn">Actualizar</button>
        <a href="{{ route('users.index') }}" class="btn btn-volver">
    <i class="fas fa-arrow-left"></i>
    </form>
@endsection
