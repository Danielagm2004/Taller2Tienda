<?php

include("BaseDatos.php");

$id=$_GET["id"];

$operacionBD= new BaseDatos();

$consultasSQL="DELETE FROM productos WHERE codigoProducto='$id'";

$operacionBD->eliminarDatos($consultasSQL);