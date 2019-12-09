<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
session_destroy();

setcookie("usuario","");
header("location:index.php");
?>