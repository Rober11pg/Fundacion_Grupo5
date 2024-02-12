<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>

<body>
    <center>
        <h1>Búsqueda mascota por campos</h1>
    </center>
    <br>
    <center>
        <table border="1">
            <tr>
                <th>Mascota ID</th>
                <th>Apodo</th>
                <th>Sexo</th>
                <th>Raza ID</th>
                <th>Edad relativa</th>
                <th>Estado de adopción</th>
                <th>Foto</th>
                <th>Fecha de ingreso</th>
            </tr>
            <?php
            $apodo = ($_POST['apodo'] == "null")? null : $_POST['apodo'];
            $sexo =  ($_POST['sexo'] == "null")? null : $_POST['sexo'];
            $estado = ($_POST['estado'] == "null")? null : $_POST['estado'];
            $edad = ($_POST['edad'] == "null")? null : $_POST['edad'];
            include_once(__DIR__ . '/../ClassConsultasBD.php');
            $obd = new ClassConsultasBD();
            $li_mascota = $obd->BuscarMascotaPorCampos($apodo, $sexo, $estado, $edad);

            foreach ($li_mascota as $x) {
            ?>
                <tr>
                    <td><?php echo $x->getMascotaID() ?></td>
                    <td><?php echo $x->getApodo() ?></td>
                    <td><?php echo $x->getSexo() ?></td>
                    <td><?php echo $x->getRazaID() ?></td>
                    <td><?php echo $x->getEdadRelativa() ?></td>
                    <td><?php echo $x->getEstadoAdopcion() ?></td>
                    <td><?php echo $x->getFotoMascota() ?></td>
                    <td><?php echo $x->getFechaIngreso() ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>

</body>

</html>