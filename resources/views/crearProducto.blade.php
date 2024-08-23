<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <h2>Crear Producto</h2>

    <div class="form-container">
        <form action={{ route('guardar.producto') }} method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="name">descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Stock:</label>
                <input type="number" id="stock" name="stock"  required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio"  required>
            </div>
            <label for="pagasIsv">¿Pagas ISV?</label>
            <input type="checkbox" id="pagasIsv" name="pagasIsv" value="1">
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>