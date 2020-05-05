<?php
include("config.php");
$mname=$_POST['mname'];
$shows_string = implode(', ', $_POST['shows']);
$lout=$_POST['layout'];
$query="insert into movie_tb(mname,shows,layout,date1) values ('$mname','$shows_string','$lout',now())";

$result=mysql_query($query); 
if ($result) {
    header("Location:adminview.php");
} else {
    echo "Error: ";
}

?>
