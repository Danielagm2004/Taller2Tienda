<?php 




$precios=array(1600,5000,2500);
$nombres=array("arroz","salchichas","azucar");
$marcas=array("Diana","Zenú","Incauca");




$productos=array(
    
    array("arroz",1600,"Diana"),
    array("salchichas",5000,"Zenú"),
    array("azucar",2500,"incauca"),
    array("aceite",7000,"Premier")
);


foreach($productos as $producto){

    
    echo($producto[0]);
    echo("<br>");


}








?>