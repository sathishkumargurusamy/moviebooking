<?php
include("config.php");
include("config1.php");
$timing=$_POST['shows'];
if (isset($_POST["date1"]))
{
    $date1=$_POST['date1'];
}
mysql_query("delete FROM rate");
mysql_query("delete FROM seat");
mysql_query("insert into rate values ('0','0','0','0','0')");
?>