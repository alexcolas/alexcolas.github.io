<?php
session_start();
require_once "../../resources/i18n.class.php";
$i18n = new i18n('../../resources/lang/lang_{LANGUAGE}.ini', '../../resources/langcache/', 'en');
$i18n->setFallbackLang('en');
$i18n->setForcedLang($_SESSION["Lang"]) ;
$i18n->init();
?><html>
<head>
	<link type="text/css" href="../../resources/css/bootstrap.min.css" rel="stylesheet" />
	<link type="text/css" href="../../resources/css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="../../resources/css/app/app.v1.css" rel="stylesheet" />
	<link type="text/css" href="../../resources/css/style.css" rel="stylesheet" />
</head>
<body id="empty_body">
	<h1><?php echo L::page_free; ?></h1>
	<p><?php echo L::page_thankfillfield; ?></p>
	<br />
	<center><img src="../../static/Sample/free.jpg" /></center>
</body>
</html>
