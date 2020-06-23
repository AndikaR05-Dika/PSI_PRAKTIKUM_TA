<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM admin WHERE id=$id");

header("Location:index1.php");
?>