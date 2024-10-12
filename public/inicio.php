<?php
require '../controllers/contactosController.php';
require '../views/contactosView.php';

use App\views\ContactosViews;

$contactosView = new ContactosViews();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contactos</title>
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
    <header>
        <h1>Lista de contactos</h1>
    </header>
    <section>
        <br>
        <?php echo $contactosView->getTable();?>
        <br>
    </section>
</body>
</html>