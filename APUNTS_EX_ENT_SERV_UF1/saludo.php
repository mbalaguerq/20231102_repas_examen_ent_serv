
<?php
/*
GET
li dono un valor inicial per si el ifsset es false
    $nombre="anonimo";

comprova si dins la variable GET existeix n
    if(isset($_GET["n"])){
la posos dins una variable de php que es diu $nombre
            $nombre = $_GET["n"];
    }
Comento mètode get, per que es fa gairebé igual que el post
    */
?>

<?php
//POST
    //li dono un valor inicial per si el ifsset es false
    //$nombre="anonimo";

    //comprova si dins la variable GET existeix n
    if(isset($_POST["n"])){
    //la posos dins una variable de php que es diu $nombre
            $nombre = $_POST["n"];
    }
?>
<h1>Bienvenido <?=$nombre?></h1>
<!------------------------------------------------------------
-->
