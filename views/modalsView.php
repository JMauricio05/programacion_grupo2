<?php

namespace App\views;

class ModalsView
{

    function getConfirmationModal()
    {
        $modal = '<div class="modal">';
        $modal .= '  <div class="confirmation">';
        $modal .= '     <button class="closeBtn">X</button>';
        $modal .= '     <p class="msg">¿Desea eliminar el registro?</p>';
        $modal .= '     <button class="okBtn">Si</button>';
        $modal .= '     <button class="notBtn">No</button>';
        $modal .= '  </div>';
        $modal .= '</div>';
        return $modal;
    }
}
