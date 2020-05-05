<?php

if (!session_id())
              session_start();
include("config.php");
$username=$_POST['uname'];
$password=$_POST['pwd'];
$query="select username,password from user_tb where username='$username' and password='$password'";
$result=mysql_query($query); 
$row=mysql_fetch_array($result);
$admin=$row['username'];
 if($admin!="") 
    {
		$_SESSION['username'] = $username;
	  $_SESSION['admin']=$adminname;
	  $_SESSION['logon']=true;
  	isset($_SESSION['admin']);
	header("location:adminview.php");
	}
	else 
	{
	$_SESSION['notmessage']="Invalid Username or Password";
	header("location:index.php");
	}
?>
