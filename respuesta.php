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
        echo "el nombre es obligatorio";
      } else {
        echo "<p>Nombre: ". $nombre ." </p>";
      }
      //validando el apellido 
      if(!isset($apellido) || trim($apellido) != ""){
        echo "<p>Apellido ". $apellido ."</p>";
      } else {
        echo "el apellido es obligatorio";
      }
      ?>
      </div>




  </body>
</html>
