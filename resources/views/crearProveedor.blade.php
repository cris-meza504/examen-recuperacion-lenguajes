<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
</head>
<body>
    <h2>Crear Proveedor</h2>

    <div class="form-container">
        <form action={{ route('guardar.proveedor') }} method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="name">nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Fecha de Registro:</label>
                <input type="date" id="stock" name="fechaRegistro"  required>
            </div>
            <div class="form-group">
                <label for="precio">Telefono:</label>
                <input type="text" id="fecha" name="telefono"  required>
            </div>
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo"  required>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>
