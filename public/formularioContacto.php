<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contactos</title>
</head>
<body>
    <header>
        <h1>Registrar Contacto</h1>
    </header>
    <section>
        <form action="confirmarRegistro.php" method="post">
            <div>
                <label>Nombre</label>
                <input type="text" name="nombre" required>
            </div>
            <div>
                <label>Teléfono</label>
                <input type="text" name="telefono" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </section>
</body>
</html>