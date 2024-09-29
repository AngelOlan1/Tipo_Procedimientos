<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Tipo de Procedimiento</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Detalle del Tipo de Procedimiento</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Información del Procedimiento</h5>
                <div class="mb-3">
                    <strong>ID:</strong> {{ $tipo->IdTP }}
                </div>
                <div class="mb-3">
                    <strong>Nombre del Procedimiento:</strong> {{ $tipo->TipoPro }}
                </div>
                <div class="mb-3">
                    <strong>Clave:</strong> {{ $tipo->Clave }}
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('tipopro.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('tipopro.edit', $tipo->IdTP) }}" class="btn btn-primary">Editar</a>

            <form action="{{ route('tipopro.destroy', $tipo->IdTP) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
