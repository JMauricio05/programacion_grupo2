<?php

namespace App\views;

use App\controllers\ContactosController;

class ContactosViews
{
    private $controller;

    function __construct()
    {
        $this->controller = new ContactosController();
    }

    function getTable()
    {
        $rows = '';
        $contactos = $this->controller->getAllContactos();
        if (count($contactos) > 0) {
            foreach ($contactos as $contacto) {
                $id = $contacto->get('id');
                $rows .= '<tr>';
                $rows .= '   <td>' . $contacto->get('nombre') . '</td>';
                $rows .= '   <td>' . $contacto->get('email') . '</td>';
                $rows .= '   <td>' . $contacto->get('telefono') . '</td>';
                $rows .= '   <td>';
                $rows .= '      <a href="formularioContacto.php?cod=' . $id . '">modificar</a>';
                $rows .= '   </td>';
                $rows .= '</tr>';
            }
        } else {
            $rows .= '<tr>';
            $rows .= '   <td colspan="3">No hay datos registrados</td>';
            $rows .= '</tr>';
        }
        $table = '<table>';
        $table .= '  <thead>';
        $table .= '     <tr>';
        $table .= '         <th>Nombre</th>';
        $table .= '         <th>Email</th>';
        $table .= '         <th>Teléfono</th>';
        $table .= '     </tr>';
        $table .= '  </thead>';
        $table .= ' <tbody>';
        $table .=  $rows;
        $table .= ' </tbody>';
        $table .= '</table>';
        return $table;
    }

    function getMsgNewContacto($datosFormulario)
    {
        $datos = [
            "nombre" => $datosFormulario['nombre'],
            "telefono" => $datosFormulario['telefono'],
            "email" => $datosFormulario['email'],
        ];
        $confirmarAccion = $this->controller->saveContacto($datos);
        $msg = '<h2>Resultado de la operación</h2>';
        if ($confirmarAccion) {
            $msg .= '<p>Datos del contacto guardados.</p>';
        } else {
            $msg .= '<p>No se pudo guardar la información del contacto</p>';
        }
        return $msg;
    }

    function getFormContacto($data)
    {
        $datos = null;
        $form = '<form action="confirmarRegistro.php" method="post">';
        if (!empty($data['cod'])) {
            $form .= '<input type="hidden" name="cod" value="' . $data['cod'] . '">';
            $datos = $this->controller->getContacto($data['cod']);
        }
        $nombre = empty($datos) ? '' : $datos->get('nombre');
        $telefono = empty($datos) ? '' : $datos->get('telefono');
        $email = empty($datos) ? '' : $datos->get('email');

        $form .= '  <div>';
        $form .= '      <label>Nombre</label>';
        $form .= '      <input type="text" name="nombre" value="' . $nombre . '" required>';
        $form .= '  </div>';
        $form .= '  <div>';
        $form .= '      <label>Teléfono</label>';
        $form .= '      <input type="text" name="telefono" value="' . $telefono . '" required>';
        $form .= '  </div>';
        $form .= '  <div>';
        $form .= '      <label>Email</label>';
        $form .= '      <input type="email" name="email" value="' . $email . '" required>';
        $form .= '  </div>';
        $form .= '  <div>';
        $form .= '      <button type="submit">Guardar</button>';
        $form .= '  </div>';
        $form .= '</form>';
        return $form;
    }

    function getMsgUpdateContacto($datosFormulario)
    {
        $datos = [
            'id' => $datosFormulario['cod'],
            "nombre" => $datosFormulario['nombre'],
            "telefono" => $datosFormulario['telefono'],
            "email" => $datosFormulario['email'],
        ];
        $confirmarAccion = $this->controller->updateContacto($datos);
        $msg = '<h2>Resultado de la operación</h2>';
        if ($confirmarAccion) {
            $msg .= '<p>Datos del contacto guardados.</p>';
        } else {
            $msg .= '<p>No se pudo guardar la información del contacto</p>';
        }
        return $msg;
    }
}
