<?php

if (!session_id())
              session_start();
include("config1.php");
$type=$_POST['type'];
$username=$_POST['uname'];
$password=$_POST['pwd'];
$name=$_POST['fname'];
$phone_no=$_POST['phone'];
$date=date('d-m-Y');
$address="";
if($type=='login'){
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
	header("location:abc.php");
	}
	else 
	{
	$_SESSION['notmessage']="Invalid Username or Password";
	header("location:index.php");
	}
}
else{
	$con = mysql_connect("localhost","root","");
	mysql_select_db("abirami_db",$con);
	$query2=mysql_query("INSERT INTO user_tb VALUES ('$username','$password','$name','$phone_no', '$address','$date')",$con);
	if($query2){
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
			header("location:abc.php");
			}
			else 
			{
			$_SESSION['notmessage']="Invalid Username or Password";
			header("location:index.php");
			}
	}
	else{
		echo '<script> alert("Error adding user!!")</script>';
	}
}
?>
<!--$conf_subject = 'Your recent enquiry';

// Who should the confirmation email be from?
$conf_sender = 'Organisation Name <no-reply@myemail.co.uk>';

$msg = $_POST['Name'] . ",\n\nThank you for your recent enquiry. A member of our 
team will respond to your message as soon as possible.";

mail( $_POST['Email'], $conf_subject, $msg, 'From: ' . $conf_sender );--!>