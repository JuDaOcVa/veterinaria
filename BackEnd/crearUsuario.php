<?php
$mysqli = new mysqli("mysql://root:YZv9j9VAjnUf4jAOpYvo@containers-us-west-36.railway.app:7635/railway", "root", "", "control_vet");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }else{
    $name= $_POST["name"];
    $identification = $_POST["identification"];
    $gender = $_POST["gender"];
      $query = $mysqli->query("INSERT INTO `clients`(`id`, `name`, `identification`, `gender`) VALUES (NULL,'$name','$identification','$gender')");
      if (!$query) {
          echo "Falló error: (" . $mysqli->errno . ") " . $mysqli->error;
        }else{
            header("location:../FrontEnd/vistaUsuarios.php");
        }
  }
  ?>
