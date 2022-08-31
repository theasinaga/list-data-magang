<?php
include_once("config.php");
$nim = $_GET['nim'];
$result = mysqli_query($mysqli, "DELETE FROM pendaftar_magang WHERE nim=$nim");
header("Location:index.php");
?>