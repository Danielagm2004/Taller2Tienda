<?php

include("BaseDatos.php");

$id=$_GET["id"];

$operacionBD= new BaseDatos();

$consultasSQL="DELETE FROM productos WHERE id='$id'";

$operacionBD->eliminarDatos($consultasSQL);