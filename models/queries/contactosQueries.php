<?php

namespace App\models\queries;

class ContactosQueries
{

    static function selectAll()
    {
        return "select * from contactos";
    }

    static function insert($contacto)
    {
        $nombre = $contacto->get('nombre');
        $email = $contacto->get('email');
        $telefono = $contacto->get('telefono');
        $sql = "insert into contactos (nombre,telefono,email) values ";
        $sql .= "('$nombre','$telefono','$email')";
        return $sql;
    }

    static function whereId($id)
    {
        return "select * from contactos where id=$id";
    }

    static function update($contacto)
    {
        $id = $contacto->get('id');
        $nombre = $contacto->get('nombre');
        $email = $contacto->get('email');
        $telefono = $contacto->get('telefono');
        $sql = "update contactos set ";
        $sql .= "nombre='$nombre',";
        $sql .= "email='$email',";
        $sql .= "telefono='$telefono' ";
        $sql .= " where id=$id";
        return $sql;
    }
}
