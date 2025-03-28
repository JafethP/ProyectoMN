<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/ProyectoMN/Proyecto/Controller/OfertasController.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/ProyectoMN/Proyecto/View/layoutInterno.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>

<body id="page-top">

    <div id="wrapper">

        <?php MenuNavegacion(); ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?php BarraNavegacion(); ?>

                <div class="container-fluid">

                <br></br>
                <br></br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Puesto</th>
                                <th>Descripción</th>
                                <th>Salario</th>
                                <th>Horario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $datos = ConsultarOfertas();

                                while($row = mysqli_fetch_array($datos))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $row["Id"] . "</td>";
                                    echo "<td>" . $row["Nombre"] . "</td>";
                                    echo "<td>" . $row["Descripcion"] . "</td>";
                                    echo "<td>" . $row["Salario"] . "</td>";
                                    echo "<td>" . $row["Horario"] . "</td>";
                                    echo "<td><input type='button' class= 'btn btn-outline-primary' value= 'Ver Detalle'>"
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <?php PrintFooter(); ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea salir del sistema?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">Presione el botón Salir para finalizar su sesión actual</div>
                <div class="modal-footer">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-primary" id="btnSalir" name="btnSalir"
                            value="Salir"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php PrintScript(); ?>

</body>

</html>