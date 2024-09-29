@extends('layouts.app')

@section('title', 'Listado de TipoPros')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="mb-4">Gestión de Tipos de Procedimiento</h2>
        <a class="btn btn-success mb-3" href="{{ route('tipopro.create') }}"> Crear Nuevo Tipo</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tipo de Procedimiento</th>
                    <th>Clave</th>
                    <th width="280px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->IdTP }}</td>
                        <td>{{ $tipo->TipoPro }}</td>
                        <td>{{ $tipo->Clave }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('tipopro.edit', $tipo->IdTP) }}">Editar</a>
                            <form action="{{ route('tipopro.destroy', $tipo->IdTP) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
