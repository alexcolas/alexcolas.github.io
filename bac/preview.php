<?php
//header("content-type: image/jpeg; charset=utf-8");
session_start();
error_reporting(0);
ini_set('memory_limit', '-1');
require_once("render.php");


$BACPriceEUR = 6.99;
$BTC_EUR = 500;
$BACPriceBTC = sprintf("%.8f", $BACPriceEUR / $BTC_EUR);
$BAC = new BAC();
$BAC->setName($_SESSION["Preview"]["BAC"]["firstname"], $_SESSION["Preview"]["BAC"]["lastname"]);
$BAC->setGender($_SESSION["Preview"]["BAC"]["gender"]);
$BAC->setTitle($_SESSION["Preview"]["BAC"]["title"]);
$BAC->setDate($_SESSION["Preview"]["BAC"]["birthdate"], $_SESSION["Preview"]["BAC"]["birthcity"], $_SESSION["Preview"]["BAC"]["birthcity_zipcode"]);
$BAC->setInfos($_SESSION["Preview"]["BAC"]["getdate"], $_SESSION["Preview"]["BAC"]["getcity"]);
$BAC->Render(true, $_SESSION["Preview"]["BAC"]["effect"]);
$_SESSION["Command"][$_GET["uid"]] = array("uid"=>$_GET["uid"], "type"=>"BAC", "BAC"=>$BAC, "post"=>$_SESSION["Preview"]["BAC"], "priceEUR"=>$BACPriceEUR, "priceBTC"=>$BACPriceBTC);
?>
