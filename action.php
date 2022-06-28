<?php
require_once 'classes/Route.php';
require_once 'classes/UserAuth.php';
require_once 'classes/Dbh.php';

$route = new FormController();
$route->handleForm();



