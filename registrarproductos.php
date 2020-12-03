<?php

include("BaseDatos.php");

if(isset($_POST["Boton"])){

    $nombre=$_POST["nombrep"];
    $marca=$_POST["marcap"];
    $precio=$_POST["preciop"];
    $descripcion=$_POST["descripcionp"];

   // echo($nombre."-".$marca."-".$precio."-".$descripcion);

   $operacionBD= new BaseDatos();
   

   $consultaSQL="INSERT INTO productos(nombre, marca, precio, descripcion) VALUES ('$nombre','$marca','$precio', '$descripcion')";
   

   $operacionBD->agregarDatos($consultaSQL);


}





?>