<?php
include_once("config.php");
$id = $_GET['id_jadwal'];
$result = mysqli_query($mysqli, "DELETE FROM jadwal WHERE id_jadwal=$id");
header("Location:index.php");
?>