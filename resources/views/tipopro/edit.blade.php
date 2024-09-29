<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Procedimiento</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center mb-4">Editar Tipo de Procedimiento</h2>

                <!-- Muestra mensajes de error si existen -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>¡Atención!</strong> Hay algunos problemas con los datos ingresados:
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('tipopro.update', $tipo->IdTP) }}" method="POST" class="bg-light p-4 rounded shadow-sm">
                    @csrf
                    @method('PUT') <!-- Para indicar que es una actualización -->

                    <div class="form-group">
                        <label for="TipoPro">Nombre del Procedimiento:</label>
                        <input type="text" name="TipoPro" class="form-control" value="{{ old('TipoPro', $tipo->TipoPro) }}" required placeholder="Ej: Proceso Administrativo">
                    </div>

                    <div class="form-group">
                        <label for="Clave">Clave:</label>
                        <input type="text" name="Clave" class="form-control" value="{{ old('Clave', $tipo->Clave) }}" required maxlength="5" placeholder="Ej: PA">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('tipopro.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
