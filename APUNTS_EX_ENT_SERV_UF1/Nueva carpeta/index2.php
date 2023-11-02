

<!---
echo "El nom introduit es" . $_GET ["nomVariable"];
echo "La ciutat introduida és:". $_GET ["ciutatVariable"];

Hola  < ?php echo $_GET["nomVariable"]; ?><br>
La teva ciutat és: < ?php echo $_GET["ciutatVariable"]; ?>
--->
<?php
//enviar paràmetres amb get

$n= $_GET["nom"];
$c= $_GET["ciutat"];

echo "El teu nom és " . $_GET["nom"] . "i la teva ciutat es " . $_GET["ciutat"] ;


?>
<h2 style="color:green">El teu nom es <?=$n?> </h2> 
<h3> La teva ciutat és <?=$c?> </h3>  



