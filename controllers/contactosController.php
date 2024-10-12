<?php
namespace App\controllers;

use App\models\entities\Contacto;

class ContactosController{

    function getAllContactos(){
        return Contacto::all();
    }
}