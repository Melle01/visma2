<?php
include("config.php");

if(!isset($_SESSION['user'])){
	header("Location: index.php");
	die();
}

include("views/page2.php");