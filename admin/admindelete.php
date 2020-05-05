<?php
@ob_start(0);
include("config.php");
$id=$_GET['id'];
$query = mysql_query("DELETE FROM movie_tb WHERE id= $id");
header("location:adminview.php");
?>