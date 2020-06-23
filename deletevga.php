<?php
include_once("config1.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM vga WHERE ID=$id");

header("Location:indexvga.php");
?>