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
                $rows .= '<tr>';
                $rows .= '   <td>' . $contacto->get('nombre') . '</td>';
                $rows .= '   <td>' . $contacto->get('email') . '</td>';
                $rows .= '   <td>' . $contacto->get('telefono') . '</td>';
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
}
