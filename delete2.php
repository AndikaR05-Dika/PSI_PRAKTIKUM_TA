<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM staff WHERE id=$id");

header("Location:index2.php");
?>