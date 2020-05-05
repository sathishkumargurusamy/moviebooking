<?php 
include('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<!--// Stylesheets //-->
<link href="assets/style.css" rel="stylesheet" media="screen" />
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
.logo{
    width:250px;
    height: 200px;
}
</style>
<body>
<!-- Wrapper Start -->
<div class="loginwrapper">
	<span class="circle"></span>
	<div class="loginone">
    	<header>
        	<img src="assets/logo.png" class="logo"/>
            <p>Enter your credentials to login to your account</p>
        </header>
        <form action="loginchck.php" method="post" name="form">
        	<div class="username">
        		<input type="text" class="form-control" placeholder="Enter your username" name="uname"/>
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="password">
            	<input type="password" class="form-control" placeholder="Enter your password" name="pwd"/>
                <i class="glyphicon glyphicon-lock"></i>
            </div>
          
			<script>
				$(document).ready(function(){
				  $('.bluecheckradios').iCheck({
					checkboxClass: 'icheckbox_flat-blue',
					radioClass: 'iradio_flat-blue',
					increaseArea: '20%' // optional
				  });
				});  	
			</script>
            <input type="submit" class="btn btn-primary style2" value="Sign In" />
        </form>
        <footer>
        
            <div class="clear"></div>
        </footer>
    </div>
</div>
<!-- Wrapper End -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42761673-1', 'extracoding.com');
  ga('send', 'pageview');

</script>

</body>
</html>
