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
    <h2>Informacion :</h2>
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
            <label >Fecha Nacimiento :</label>
            <?php
            $fechaNacimiento = $_REQUEST['edad'];
            echo $fechaNacimiento;
            echo "<br>";
            ?>
            <label >Edad :</label>
            <?php
             $fechactual = date("Y-m-d");
            $edad = ((int)$fechactual - (int)$fechaNacimiento);
            echo $_REQUEST['cantidadAños'] = $edad;
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
          <label>Direccion :</label>
           <?php
           echo $_REQUEST['direccion'];
           echo "<br>";
           ?>
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
           <?php
           $ar = fopen("DATOS REGISTR0.txt", "a") or die("error al crear archivo");
            fputs($ar,"Fecha : ");
            fputs($ar,$_REQUEST['fecha']);
            fputs($ar,"\n");
           fputs($ar,"Nombre : ");
           fputs($ar,$_REQUEST['nombre']);
           fputs($ar,"\n");
           fputs($ar,"Apellido : ");
           fputs($ar,$_REQUEST['apellido']);
           fputs($ar,"\n");
           fputs($ar,"Email : ");
           fputs($ar,$_REQUEST['email']);
           fputs($ar,"\n");
           fputs($ar,"Fecha Nacimiento : ");
           fputs($ar,$_REQUEST['edad']);
           fputs($ar,"\n");
           fputs($ar,"Edad : ");
           fputs($ar,$_REQUEST['cantidadAños']);
           fputs($ar,"\n");
           fputs($ar, "Sexo : ");
          if($_REQUEST['sexo'] == "M"){
            fputs($ar, "Masculino");
            fputs($ar, "\n");
          }elseif($_REQUEST['sexo'] == "F"){
            fputs($ar, "Femenino");
            fputs($ar, "\n");
          }else{
            fputs($ar,"Otro");
            fputs($ar,"\n");
          };
           fputs($ar, "Direccion : ");
           fputs($ar, $_REQUEST['direccion']);
           fputs($ar,"\n");
           fputs($ar,"Barrio : ");
           if($_REQUEST['barrio'] == "V"){
             fputs($ar,"Vaiven");
             fputs($ar,"\n");
           }elseif($_REQUEST['barrio'] == "D"){
             fputs($ar,"Delicias");
             fputs($ar,"\n");
           }elseif($_REQUEST['barrio'] == "C"){
             fputs($ar,"Campo");
             fputs($ar,"\n");
           }elseif($_REQUEST['barrio'] == "R"){
             fputs($ar,"Repaso");
             fputs($ar,"\n");
           };
           fputs($ar,"Ciudad : ");
           if($_REQUEST['ciudad'] == "B"){
             fputs($ar,"Barranquilla");
             fputs($ar,"\n");
           }elseif($_REQUEST['ciudad'] == "M"){
             fputs($ar,"Medellin");
             fputs($ar,"\n");
           }elseif($_REQUEST['ciudad'] == "C"){
             fputs($ar,"Cucuta");
             fputs($ar,"\n");
           }elseif($_REQUEST['Bogota'] == "BO"){
             fputs($ar,"Bogota");
             fputs($ar,"\n");
           };
           fputs($ar, "Estrato : ");
           fputs($ar, $_REQUEST['estrato']);
           fputs($ar,"\n");
           fputs($ar,"Participacion : ");
           if($_REQUEST['estrato'] == 1 or $_REQUEST['estrato'] == 2){
             fputs($ar,"Participa en Jovenes en Accion");
           }elseif($_REQUEST['estrato'] == 3){
             fputs($ar,"Participa en Patrocinio SENA");
           }else{
             fputs($ar,"no tiene privilegios");
             fputs($ar,"\n");
           };
           fputs($ar,"Gustos : ");
           if(isset($_REQUEST['lectura']) == "lectura"){
             fputs($ar,"Lectura,");
           }if(isset($_REQUEST['musica']) == "musica"){
             fputs($ar,"Musica,");
           }if(isset($_REQUEST['deporte']) == "deporte"){
             fputs($ar,"Deporte,");
           }if(isset($_REQUEST['viajar']) == "viajar"){
             fputs($ar,"Viajar");
           };
           fputs($ar,"\n");
           fputs($ar,"Comentario : ");
           fputs($ar,$_REQUEST['comentario']);
           fputs($ar,"\n");
echo "archivo creado correctamente";
           ?> 
           
</body>

</html>