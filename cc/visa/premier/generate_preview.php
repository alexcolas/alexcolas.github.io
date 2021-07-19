<?php
session_start();
foreach ($_POST as $field=>$value) {
    $_SESSION["Form"][$field] = $value;
}
$_SESSION["Form"] = $_POST;
$_SESSION["Preview"]["CC"] = $_POST;
$uid = uniqid();
$check=0;
$erreurs="";

if (isset($_SESSION["Preview"]["CC"]["pan"]) && strlen($_SESSION["Preview"]["CC"]["pan"])>0 && strlen($_SESSION["Preview"]["CC"]["pan"])<16) {
	$check++;
	$erreurs = $erreurs."Le numéro de Carte de Crédit est incorrect<br>";
}

if (!(preg_match("!^(0?\d|1[012])/\d{2}$!",$_SESSION["Preview"]["CC"]["expiration"]))) {
	$check++;
	$erreurs = $erreurs."La date d'expiration de la CC n'est pas sous le format MM/AA<br>";
}

if (isset($_SESSION["Preview"]["CC"]["cvv"]) && strlen($_SESSION["Preview"]["CC"]["cvv"])>0 && strlen($_SESSION["Preview"]["CC"]["pan"])<3) {
	$check++;
	$erreurs = $erreurs."Le CVV est incorrect<br>";
}

?>





<!DOCTYPE html>

<?php
if ($check==0) {
?>

<html>
<head>
	<link type="text/css" href="../../../../resources/css/bootstrap.min.css" rel="stylesheet" />
	<link type="text/css" href="../../../../resources/css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="../../../../resources/css/app/app.v1.css" rel="stylesheet" />
	<link type="text/css" href="../../../../resources/css/style.css" rel="stylesheet" />
</head>
<body id="empty_body">
	<a href="preview.php?uid=<?php echo $uid; ?>" target="_blank"><img src="preview.php?uid=<?php echo $uid; ?>" style="width: 100%; max-width:500px;" /></a>
	<br><br>
	<form id="formPaymentCC" action="../../../../index.php?page=payment" method="post" target="_parent" style="float:left; margin-left:10px;">
		<input type="hidden" name="uid" value="<?php echo $uid; ?>" />
	    <button id="buttonBuyCC" class="button-success pure-button" >Ajouter au panier</button><br><br>
	</form>
</body>
</html>

<?php

} else {

	echo "<p style='font-weight:bold;color:red;'><u>Erreurs</u><br>";
	echo $erreurs;
	echo "</p><br><br>";
	include("empty_preview.php");

}

?>