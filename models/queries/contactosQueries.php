<?php
namespace App\models\queries;

class ContactosQueries{

    static function selectAll(){
        return "select * from contactos";
    }
}