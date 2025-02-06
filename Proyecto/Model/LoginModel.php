<?php

function RegistrarCuentaModel($identificacion,$nombre,$correo,$contrasenna)
{
    $context = mysqli_connect("127.0.0.1:3307", "root","","mn_databese")

    $sentencia = "CALL SP_RegistrarCuenta('$identificacion','$nombre','$correo','$contrasenna')";
    $resultado = $context -> query($sentencia);

    mysqli_close($context);
}

?>

