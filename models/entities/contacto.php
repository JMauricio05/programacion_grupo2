<?php

namespace App\models\entities;

use App\models\db\EjemploDb;
use App\models\queries\ContactosQueries;

class Contacto
{
    private $id;
    private $nombre;
    private $telefono;
    private $email;

    function set($prop, $value)
    {
        $this->{$prop} = $value;
    }

    function get($prop)
    {
        return $this->{$prop};
    }

    static function all()
    {
        $sql = ContactosQueries::selectAll();
        $db = new EjemploDb();
        $result = $db->query($sql);
        $contactos = [];
        while ($row = $result->fetch_assoc()) {
            $contacto = new Contacto();
            $contacto->set('id', $row['id']);
            $contacto->set('nombre', $row['nombre']);
            $contacto->set('telefono', $row['telefono']);
            $contacto->set('email', $row['email']);
            array_push($contactos, $contacto);
        }
        $db->close();
        return $contactos;
    }

    static function find($id)
    {
        $sql = ContactosQueries::whereId($id);
        $db = new EjemploDb();
        $result = $db->query($sql);
        $contacto = null;
        while ($row = $result->fetch_assoc()) {
            $contacto = new Contacto();
            $contacto->set('id', $row['id']);
            $contacto->set('nombre', $row['nombre']);
            $contacto->set('telefono', $row['telefono']);
            $contacto->set('email', $row['email']);
        }
        $db->close();
        return $contacto;
    }

    function save()
    {
        $sql = ContactosQueries::insert($this);
        $db = new EjemploDb();
        $result = $db->query($sql);
        $db->close();
        return $result;
    }

    function update()
    {
        $sql = ContactosQueries::update($this);
        $db = new EjemploDb();
        $result = $db->query($sql);
        $db->close();
        return $result;
    }

    function delete()
    {
        $sql = ContactosQueries::delete($this);
        $db = new EjemploDb();
        $result = $db->query($sql);
        $db->close();
        return $result;
    }
}
