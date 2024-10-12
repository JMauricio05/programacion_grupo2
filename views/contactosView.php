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
            //falta leer los datos
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
}
