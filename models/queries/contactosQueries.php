<?php
namespace App\models\queries;

class ContactosQueries{

    static function selectAll(){
        return "select * from contactos";
    }

    static function insert($contacto){
        $nombre = $contacto->get('nombre');
        $email = $contacto->get('email');
        $telefono = $contacto->get('telefono');
        $sql = "insert into contactos (nombre,telefono,email) values ";
        $sql .= "('$nombre','$telefono','$email')";
        return $sql;
    }
}