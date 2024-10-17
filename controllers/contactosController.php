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

    function getContacto($id){
        return Contacto::find( $id);
    }

    function updateContacto($datos){
        $contacto = new Contacto();
        $contacto->set('id', $datos['id']);
        $contacto->set('nombre', $datos['nombre']);
        $contacto->set('email', $datos['email']);
        $contacto->set('telefono', $datos['telefono']);
        return $contacto->update();
    }
}