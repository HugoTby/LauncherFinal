<?php
session_start();
include("index.php");
$_SESSION["Login"] = $_POST['login'];
$_SESSION["Password"] = $_POST['password'];
echo renvoi($_SESSION["Login"], $_SESSION["Password"]);
?>