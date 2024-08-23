<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <h2>Crear Empleado</h2>

    <div class="form-container">
        <form action={{ route('guardar.empleado') }} method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="name">nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Apellido:</label>
                <input type="text" id="stock" name="apellido"  required>
            </div>
            <div class="form-group">
                <label for="precio">Fecha de Ingreso:</label>
                <input type="date" id="fecha" name="fechaIngreso"  required>
            </div>
            <label for="pagasIsv">Salario</label>
            <input type="text" id="salario" name="salario"  required>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>