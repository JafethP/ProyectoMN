<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/ProyectoMN/Proyecto/Controller/OfertasUsuarioController.php";
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

                <h5>Consulta de Ofertas Aplicadas</h5>

                <br/><br/>

                <?php
                                        if(isset($_POST["Message"]))
                                        {
                                            echo '<div class="alert alert-warning Mensajes">' . $_POST["Message"] . '</div>';                                   
                                        }
                                    ?>

                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Puesto</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Salario</th>
                                <th>Horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $datos = ConsultarOfertasUsuario($_SESSION["IdUsuario"]);

                                while($row = mysqli_fetch_array($datos))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $row["IdOferta"] . "</td>";
                                    echo "<td>" . $row["Nombre"] . "</td>";
                                    echo "<td>" .  date('d/m/Y H:i', strtotime($row["Fecha"])) . "</td>";
                                    echo "<td>" . $row["DescripcionEstado"] . "</td>";
                                    echo "<td> $ " . $row["Salario"] . "</td>";
                                    echo "<td>" . $row["Horario"] . "</td>";                                    
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

    <?php PrintScript(); ?>
    <script>
    
        $(document).ready(function() {
            var table = new DataTable('#example', {
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/2.2.2/i18n/es-ES.json',
                },
                columnDefs: [
                    { targets: "_all", className: "dt-left" }
                ]
            });
        });

    </script>

</body>

</html>