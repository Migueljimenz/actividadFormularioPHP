<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <tbody>
    <form>
      <table border=1>
        <tr>
          <td>
            <label for="nombre">Nombre :</label>
            <?php
            echo $_REQUEST['nombre'];
            ?>
          </td>
          <td>
            <label for="fecha">Fecha :</label>
            <?php
            echo $_REQUEST['fecha'];
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="apellido">Apellido :</label>
            <?php
            echo $_REQUEST['apellido'];
            ?>
          </td>
          <td>
            <label for="edad">Fecha Nacimiento :</label>
            <?php
            $fechaNacimiento = $_REQUEST['edad'];
            echo $fechaNacimiento;
            echo "<br>";
            ?>
            <?php
            $fechaActual = date("Y-m-d");
            $edad = $fechaActual - $fechaNacimiento;
            echo "Edad: " . $edad;
            ?>

          </td>
        <tr>
        <tr>
          <td>
            <label for="email">Email :</label>
            <?php
            echo $_REQUEST['email'];
            ?>
          </td>
          <td>
            <label for="estrato">Estrato :</label>
            <?php
            echo $_REQUEST['estrato'];
            if ($_REQUEST['estrato'] == 1 or $_REQUEST['estrato'] == 2) {
              echo "<br>";
              echo " Beneficios : Jovenes en Accion";
            } elseif ($_REQUEST['estrato'] == 3) {
              echo "<br>";
              echo " Beneficios : Patrocinio SENA";
            } else {
              echo "<br>";
              echo " Beneficios : NO tiene privilegios";
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="sexo">Sexo :</label>

            <?php
            if ($_REQUEST['sexo'] == "M") {
              echo "Masculino";
            } elseif ($_REQUEST['sexo'] == "F") {
              echo "Femenino";
            } else {
              echo "Otro";
            }
            ?>
          </td>
          <td>
            <label>Barrio :</label>
            <?php
            if ($_REQUEST['barrio'] == "D") {
              echo "Delicias";
            }
            if ($_REQUEST['barrio'] == "V") {
              echo "Vaiven";
            }
            if ($_REQUEST['barrio'] == "R") {
              echo "Repaso";
            }
            if ($_REQUEST['barrio'] == "C") {
              echo "Campo";
            }
            echo "<br>";
            ?>
            <label>Ciudad :</label>
            <?php
            if ($_REQUEST['ciudad'] == "B") {
              echo "Barranquilla";
            }
            if ($_REQUEST['ciudad'] == "M") {
              echo "Medellin";
            }
            if ($_REQUEST['ciudad'] == "C") {
              echo "Cucuta";
            }
            if ($_REQUEST['ciudad'] == "BO") {
              echo "Bogota";
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="gustos">Gustos :</label>
            <br>
            <?php
            if (isset($_REQUEST['lectura']) == 'lectura') {
              echo "Lectura";
              echo "<br>";
            }
            if (isset($_REQUEST['musica']) == 'musica') {
              echo "Musica";
              echo "<br>";
            }
            if (isset($_REQUEST['deporte']) == 'deporte') {
              echo "Deporte";
              echo "<br>";
            }
            if (isset($_REQUEST['viajar']) == 'viajar') {
              echo "Viajar";
            }
            ?>
          </td>
          <td>
            <label for="comentario">Comentario :</label>
            <br>
            <?php
            $comentario = $_REQUEST['comentario'];
            echo $comentario;
            ?>
          </td>
        </tr>
      </table>
    </form>
  </tbody> 
</body>

</html>