@extends('layout')

@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn">
        <i class="fas fa-plus"></i> Crear Usuario
    </a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->Idu }}</td>
                    <td>{{ $user->NomU }}</td>
                    <td>{{ $user->ApPa }}</td>
                    <td>{{ $user->ApMa }}</td>
                    <td>{{ $user->User }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->Idu) }}" class="btn btn-editar">
                            <i class="fas fa-edit"></i> 
                        </a>
                        <form action="{{ route('users.destroy', $user->Idu) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-eliminar">
                                <i class="fas fa-trash"></i> 
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
