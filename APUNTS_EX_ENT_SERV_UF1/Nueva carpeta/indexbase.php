<-- //1 Crear una COOKIE que acumuli el n de clics que es fan amb el botó.-->

<hr>
<h2><strong> 1-COOKIE que acumula el n de clics que es fan amb el botó.</strong></h1>
<br>

<?php 

	$num = 0;

	// si no existe la cookie, cookie=0
	if( !isset($_COOKIE["numero"])){
		setcookie("numero", "0", time() + (86400 * 30), "/");
	}else{
		$num = $_COOKIE["numero"];
	}

	// si existe $_GET (he clicado), cookie+1
	if( isset($_GET["c"]) ){
		$num++;
		setcookie("numero", $num, time() + (86400 * 30), "/");
	}	

	if( isset($_GET["reset"])){
		setcookie("numero", "0", time() + (86400 * 30), "/");
		$num=0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container pt-4">

	<main class="text-center">
		<div>
			<a href="./?c"><button class="btn btn-success">Click</button></a>
		</div>
		<div>
			<h1><?= $num ?> clicks hechos</h1>
			<a href="./?reset">
				<small>reset</small>
			</a>
		</div>
	</main>

</body>
</html>


<hr>
<br>

<hr>
<h2><strong> 2-JOC NUMERO MÉS GRAN AMB VARIABLE SUPER GLOBAL SESSION.</strong></h1>
<br>

<?php
session_start();
//Verifiquem si tenim n random ja a la sessió.
if(!isset($_SESSION["numerosecret"]))
{
    //si no existeix, generem número random.
    $_SESSION["numerosecret"]=rand(1,100);
}
//aquest n random l'assignem a una variable que es pugui utilitzar en el codi en concret.
$numerosecret=$_SESSION["numerosecret"];

if (isset($_GET["numero"])) 
{
    if ($_GET ["numero"]>$numerosecret)
    {
        echo "¿Has dicho " . $_GET["numero"] . "?";
        echo "Estic pensant en un número més petit";  
    }
    else if($_GET ["numero"]<$numerosecret)
    {
        echo "¿Has dicho " . $_GET["numero"] . "?";
        echo "Estic pensant en un número més gran";
    }
    else
    {
        echo "CORRECTE!!!";         
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cssbase.css" id="modo-dia-css">
	<script src="jquery.min.js"></script>
	
	<title></title>

</head>
<body>
<H1>Endevina el número que estic pensant</H1>
<br>
<h2>Introdueix un número de l'1 al 100</h2>	

<form method="get" action=".">
    <input type="number" name="numero">
    <input type="submit">
</form>

</body>
</html>
<hr>


<h2><strong>3 INICI DE SESSIO amb supervariables de session, y afegir
 botó per TANCAR SESSIO.</strong></h1>
<br>
<hr>
<?php
	session_start();
	//comprova si existeix usuari a la sessió
	IF( isset($_POST["nombre"]) ){
	//Si existeix te'l carrega a la variable superglobal.
		$_SESSION["n"] = $_POST['nombre'];
	}
	if (isset($_GET["logout"]))
	{
		session_destroy();
		header("Refresh:1; url=index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
	
</head>
<body>
     <!Comprova si el nom ja està introduit>
	<?php if( isset($_SESSION["n"]) ){ ?>
	<header class="container p-3">
		<nav class="clearfix">
			<a href="index.php? logout">
				<button class="float-end btn btn-secondary">Cerrar Sesion </button>
			</a>
		</nav>
	</header>

		<!--Si el nom està escrit al requadre, mostrarà Benvingut+nom-->
		<h1>Bienvenido <?= $_SESSION["n"] ?></h1>
	
		<!si no, el recollirà amb un miss. introdueix el teu nom>
	<?php }else{ ?>
		<form class="container text-center" method="post" action=".">
			Iniciar sesion: 
			<input class="form-control" type="text" name="nombre" placeholder="usuario" >
			<input class="m-2 btn btn-primary" type="submit" value="enviar" >
		</form>
	<?php } ?>
    </body>
</html>

    <hr>
    <hr>

<h2><strong>3-REPÀS MÈTODES GET I POST (Necessaris els index2.php/index3.php/index4.php)</strong></h1>
<br>
<hr>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"

	<link rel="stylesheet" type="text/css" href="cssbase.css">
	
	<title></title>

</head>
<body>
	<!---get es el metode i action a ón ho enviem-->
	<form method="get" action="">

		<!---input es el tipus i name el nom de la variable. Placegholder es el text que surt en gris dins el camp input-->
		<input type="text" name="nomVariable" placeholder="el teu nom">
		<br>
		<input type="text" name="ciutatVariable" placeholder="la teva ciutat">
		<input id="enviar" type="button" name="botoVariable1">
	</form>
	<p></p>

	<div id="formUser">
	<form method="post" action="">

		<!---input es el tipus i name el nom de la variable. Placeholder es el text 
		que surt en gris dins el camp input-->
		<input type="text" name="usuariVar" placeholder="User">
		<br>
		<input type="text" name="passVar" placeholder="Password">
		<input id="enviar2" type="button" name="botoVariable2">
	</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
    <script>
		//enviar paràmetres amb GET 

		$("#enviar").click(function(){

			n = $("input[name='nomVariable']").val();
			c = $("input[name='ciutatVariable']").val();

  			$.get("index2.php?nom="+n+"&ciutat="+c, function(data, status){

				//jquery Lo que ponga aqui a dentro es lo que me va a mostrar en cualquier p de la pagina-->
				$("p").html(data);
  			});	
		});
	</script>
	<script>
		$("#enviar2").click(function(){
		$.post("index3.php",
		{
			usuari : $("input[name='usuariVar']").val(),
			password : $("input[name='passVar']").val(),
		},
		function(data, status){

			$("#formUser").html(data);
		});
		});
	</script>

</body>
</html>

