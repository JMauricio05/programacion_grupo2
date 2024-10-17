<?php
namespace App\controllers;

use App\models\entities\Contacto;

class ContactosController{

    function getAllContactos(){
        return Contacto::all();
    }

    function saveContacto($datos){
        $contacto = new Contacto();
        $contacto->set('nombre', $datos['nombre']);
        $contacto->set('email', $datos['email']);
        $contacto->set('telefono', $datos['telefono']);
        return $contacto->save();
    }
}