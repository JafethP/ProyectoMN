<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/ProyectoMN/Proyecto/Model/OfertasUsuarioModel.php";

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    function ConsultarOfertasUsuario($Id)
    {
        $resultado = ConsultarOfertasUsuarioModel($Id);
        return mysqli_fetch_array($resultado);
    }

?>