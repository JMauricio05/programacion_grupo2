<?php
require '../models/db/ejemploDb.php';
require '../models/queries/contactosQueries.php';
require '../models/entities/contacto.php';
require '../controllers/contactosController.php';
require '../views/contactosView.php';

use App\views\ContactosViews;

$contactosViews = new ContactosViews();
$title = empty($_GET['cod'])?'Registrar Contacto':'Modificar Contacto';
$form = $contactosViews->getFormContacto($_GET);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contactos</title>
</head>

<body>
    <header>
        <h1><?php echo $title;?></h1>
    </header>
    <section>
        <?php echo $form;?>
    </section>
</body>

</html>