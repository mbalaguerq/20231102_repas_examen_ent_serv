<?php

//VARIABLE SESSION

$nombre = "Anonimo";
//Comença amb session start
session_start();
 
    //comprova si dins la variable SESSION existeix usr
    if(isset($_SESSION['usr'])){
    //la posos dins una variable de php que es diu $nombre
            $nombre = $_SESSION["usr"];
    }


  //VARIABLE COOKIE  
  if(isset($_COOKIE['cookie_usr'])){
    //la posos dins una variable de php que es diu $nombre
            $nombre = $_COOKIE["cookie_usr"];

  //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/" la barra es el ambito ); // 86400 = 1 day
    setcookie($cookie_usr,  $nombre, time() + (86400 * 30), "/"); 


?>
<h1>Bienvenido <?=$nombre?></h1>
<!------------------------------------------------------------
-->