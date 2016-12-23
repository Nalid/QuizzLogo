<?php 
session_start();
require_once './request.php';

deleteImages($_GET['idMarque']);

header("location:../accueil.php");

?>