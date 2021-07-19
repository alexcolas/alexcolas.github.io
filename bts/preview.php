<?php
//header("content-type: image/jpeg; charset=utf-8");
session_start();
error_reporting(0);
ini_set('memory_limit', '-1');
require_once("render.php");


$BTSPriceEUR = 4.99;
$BTC_EUR = 500;
$BTSPriceBTC = sprintf("%.8f", $BTSPriceEUR / $BTC_EUR);
$BTS = new BTS();
$BTS->setName($_SESSION["Preview"]["BTS"]["firstname"], $_SESSION["Preview"]["BTS"]["lastname"]);
$BTS->setGender($_SESSION["Preview"]["BTS"]["gender"]);
$BTS->setTitle($_SESSION["Preview"]["BTS"]["title"]);
$BTS->setDate($_SESSION["Preview"]["BTS"]["birthdate"], $_SESSION["Preview"]["BTS"]["birthcity"], $_SESSION["Preview"]["BTS"]["birthcity_zipcode"]);
$BTS->setInfos($_SESSION["Preview"]["BTS"]["getdate"], $_SESSION["Preview"]["BTS"]["getcity"]);
$BTS->Render(true, $_SESSION["Preview"]["BTS"]["effect"]);
$_SESSION["Command"][$_GET["uid"]] = array("uid"=>$_GET["uid"], "type"=>"BTS", "BTS"=>$BTS, "post"=>$_SESSION["Preview"]["BTS"], "priceEUR"=>$BTSPriceEUR, "priceBTC"=>$BTSPriceBTC);
?>
