<?php
//Get Config
require_once "lib/config.php";

//Initialize
require_once "lib/session.php";
require_once "lib/init.php";

new Session();

require_once Controller."controller.php";
require_once Model."model.php";
require_once View."view.php";

$setDefault = new View();
$setModel = new Model();

$setDefault->render('header');
$init = new Startup_init();

$setDefault->render('footer');
