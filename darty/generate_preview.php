<?php
session_start();
foreach ($_POST as $field=>$value) {
    $_SESSION["Form"][$field] = $value;
}
$_SESSION["Preview"]["darty"] = $_POST;
$uid = uniqid();
$check=0;
$erreurs="";

if (strlen($_SESSION["Preview"]["darty"]["address_zipcode"])<5) {
	$check++;
	$erreurs = $erreurs."Le code postal est incorrect<br>";
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