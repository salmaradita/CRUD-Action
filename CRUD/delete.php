<?php
include_once("config.php");
 
$nim = $_GET['NIM'];

$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE NIM=$nim");

header("Location:index.php");
?>