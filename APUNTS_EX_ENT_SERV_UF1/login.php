<?php

session_start();

    //comprova si dins la variable GET existeix n
    if(isset($_POST["usuario"])){
    //la posos dins una variable de php que es diu $nombre
            $nombre = $_POST["usuario"];
            $_SESSION['usr'] = $_POST["usuario"];
    }
?>
<h1>Bienvenido <?=$nombre?></h1>
<!------------------------------------------------------------
-->