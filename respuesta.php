<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
      <?php
        $nombre =  $_POST["nombre"];
        $apellido =  $_POST["apellido"];
        // valindando el campo del nombre
        if(!(filter_has_var(INPUT_POST,"nombre") &&
              (strlen(filter_input(INPUT_POST,"nombre")))>0)){
          echo "<br>";
          echo "el nombre es obligatorio";
        } else {
          echo "<p>Nombre: ". $nombre ." </p>";
        }
        //validando el apellido 
        if(!isset($apellido) || trim($apellido) != ""){
          echo "<p>Apellido ". $apellido ."</p>";
        } else {
          echo "<br>";
          echo "el apellido es obligatorio";
        }
        // validar checkbox, singular
        if(isset($_POST["notificaciones"])) {
          $notificaciones = $_POST["notificaciones"];
          if($notificaciones == "on") {
            echo "<br>";
            echo "las notificaciones estan activadas";
          } else { 
            echo "<br>";
            echo "las notificaciones estan desactivadas";
          }
        }
        // validar array de checkboxes
        echo "<pre>";
        echo var_dump($_POST);
        echo "</pre>";

        echo "<h2>Cursos asignados</h2>";
        if(isset($_POST["curso"])){
          $cursos = $_POST["curso"];
          echo "<ul>";
            foreach ($cursos as $curso) {
              echo "<li>". $curso ." </li>";
            }
          echo "</ul>";
        } else {
          echo "ningun curso seleccionado";
        }
       // validar un select 
       echo "<h2>Área de especialización</h2>";
       $area = $_POST["area"];
       if($area == "fe"){
         echo "Front End";
       }else if($area == "be"){
          echo "Back End";
       } else if($area == "fs"){
          echo "Full Stack";
       } else {
          echo "No has elegido ninguna especializacón";
       }
       // validar un raddio button
        echo "<h2>Tipo de curso </h2>";
        if(isset($_POST["opciones"])){
          echo "<p>has elegido ". $_POST["opciones"] ." </P>";
        }else {
          echo "<br>no has elegido el tipo de curso";
        }
        // Validando textarea
        if(isset($_POST["mensaje"])){
          $mensaje = $_POST["mensaje"];
          $nuevo_mensaje = filter_var($mensaje,FILTER_SANITIZE_STRING);
          if(strlen($nuevo_mensaje)> 0 && trim($nuevo_mensaje) != ""){
            echo "<h2>Mensaje </h2>";
            echo "<p>" . $nuevo_mensaje . "</p>";
          }else {
            echo "no se envió ningún mensaje";
          }
        } 
      ?>

      </div>




  </body>
</html>
