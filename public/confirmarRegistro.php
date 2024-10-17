<?php
require '../models/db/ejemploDb.php';
require '../models/queries/contactosQueries.php';
require '../models/entities/contacto.php';
require '../controllers/contactosController.php';
require '../views/contactosView.php';

use App\views\ContactosViews;

$contactosViews = new ContactosViews();
$datosFormulario = $_POST;
$msg = empty($datosFormulario['cod'])
  ? $contactosViews->getMsgNewContacto($datosFormulario)
  : $contactosViews->getMsgUpdateContacto($datosFormulario);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar acción</title>
</head>
<body>
    <header>
        <h1>Estado de acción</h1>
    </header>
    <section>
        <?php echo $msg;?>
        <br>
        <a href="inicio.php">Volver al inicio</a>
    </section>
</body>
</html>