<?php


//declarar array
$a= array() ;

$a[0] = "Buenos días";
$a[1] = "Buenas tardes";
$a["saludo1"] = "Buenas noches";

//codificar la cookie a array
$a_texto = json_encode($a) ;

setcookie($micookie, $a_texto, time() + (86400 * 30), "/"); // 86400 = 1 day


$_COOKIE["micookie"];

$b_texto = $_COOKIE["micookie"];

//convertir array a cooikie.
$b = json_decode($b_texto);


//crear cookie i codificar-la:
    setcookie($micookie, json_encode($a), time() + (86400 * 30), "/");

//passar de array a text:
$b= json_decode($_COOKIE["micookie"]);

//afegir linea al array
array_push($b, "otra frase");

//fer un foreach amb els elements del array:
foreach($B as $elemento){
    ?>
    <li><?= $elemento ?></li>

    <?php
}
?>


?>