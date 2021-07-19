<?php
session_start();
foreach ($_POST as $field=>$value) {
    $_SESSION["Form"][$field] = $value;
}
$_SESSION["Preview"]["DECLA"] = $_POST;
$uid = uniqid();
$check=0;
$erreurs="";

if(!empty($_FILES["photo"]["name"]))
{
	$_SESSION["Preview"]["CNI"]["Photo"] = file_get_contents($_FILES["photo"]["tmp_name"]);
}
else
{
	$_SESSION["Preview"]["CNI"]["Photo"] = null;
}

if (!(preg_match("!^(0?\d|[12]\d|3[01])/(0?\d|1[012])/((?:19|20)\d{2})$!",$_SESSION["Preview"]["DECLA"]["birthdate"]))) {
	$check++;
	$erreurs = $erreurs."La date de naissance n'est pas sous le format JJ/MM/AAAA<br>";
}

if (!(preg_match("!^(0?\d|[12]\d|3[01])/(0?\d|1[012])/((?:19|20)\d{2})$!",$_SESSION["Preview"]["DECLA"]["deliverydate"]))) {
	$check++;
	$erreurs = $erreurs."La date de délivrance de la CNI n'est pas sous le format JJ/MM/AAAA<br>";
}

if (!(preg_match("!^(0?\d|[12]\d|3[01])/(0?\d|1[012])/((?:19|20)\d{2})$!",$_SESSION["Preview"]["DECLA"]["lostdate"]))) {
	$check++;
	$erreurs = $erreurs."La date de perte de la CNI n'est pas sous le format JJ/MM/AAAA<br>";
}

if (!(preg_match("!^(0?\d|[12]\d|3[01])/(0?\d|1[012])/((?:19|20)\d{2})$!",$_SESSION["Preview"]["DECLA"]["declarationdate"]))) {
	$check++;
	$erreurs = $erreurs."La date de déclaration de perte de la CNI n'est pas sous le format JJ/MM/AAAA<br>";
}

if (strlen($_SESSION["Preview"]["DECLA"]["cninumber"])<12) {
	$check++;
	$erreurs = $erreurs."Le numéro de CNI est incorrect<br>";
}

if (strlen($_SESSION["Preview"]["DECLA"]["birthcity_zipcode"])<5) {
	$check++;
	$erreurs = $erreurs."Le code postal de la ville de naissance est incorrect<br>";
}

if (strlen($_SESSION["Preview"]["DECLA"]["address_zipcode"])<5) {
	$check++;
	$erreurs = $erreurs."Le code postal de l'adresse est incorrect<br>";
}


?>




<!DOCTYPE html>

<?php
if ($check==0) {
?>


<html>
<head>
	<link type="text/css" href="../../resources/css/bootstrap.min.css" rel="stylesheet" />
	<link type="text/css" href="../../resources/css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="../../resources/css/app/app.v1.css" rel="stylesheet" />
	<link type="text/css" href="../../resources/css/style.css" rel="stylesheet" />
</head>
<body id="empty_body">
	<a href="preview.php?uid=<?php echo $uid; ?>" target="_blank"><img src="preview.php?uid=<?php echo $uid; ?>" style="width: 100%; max-width:500px;" /></a>
	<br><br>
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