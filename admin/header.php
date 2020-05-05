<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
   
}?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememinister.com/adminpage-v-2.1/theme/adminpage_v2.2/form-mask.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 16:49:16 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Abirami-Admin</title>
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
                }
            });
        </script>
        <!-- START GLOBAL MANDATORY STYLE -->
        <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- START PAGE LABEL PLUGINS --> 
        <link href="assets/plugins/jquery.sumoselect/sumoselect.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css"/>
        <!-- START THEME LAYOUT STYLE -->
        <link href="assets/dist/css/component_ui.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="assets/dist/css/skins/skin-dark-1.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
           .input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #090;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px dashed #444;
  width: 180px;
  height: 180px;
  transition: 500ms all;
  margin-left: 40px;
}

input[type=radio]:checked + label>img {
  transform: 
scale(1.1);
}

        </style>
        
    </head>
    
    <body>
   
        <div id="wrapper" class="wrapper animsition">
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top">
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons">apps</i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img class="main-logo" src="assets/logo.png" id="bg" style="width: 80px;
height: 60px;">
                        <!--<span>AdminPage</span>-->
                    </a>
                    
                </div>
                                <div class="nav-container">
                    <!-- /.navbar-header -->
                    
                    <ul class="nav navbar-top-links navbar-right">
                        
                        <!-- /.Dropdown -->
                        <li class="dropdown">
                           
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="profile.html"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                <li><a href="index.php"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                            </ul><!-- /.dropdown-user -->
                        </li><!-- /.Dropdown -->
                        <li class="log_out">
                            <a href="index.php">
                                <i class="material-icons">power_settings_new</i>
                            </a>
                        </li><!-- /.Log out -->
                    </ul> <!-- /.navbar-top-links -->
                </div>
            </nav>
            <!-- /.Navigation -->
            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        
                        
                       
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i>Movies<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="adminadd.php">Add Movie</a></li>
                                <li><a href="adminview.php">View Movies</a></li>
                            </ul>
                        </li>
                        <li >
                            <a href="#" class="material-ripple"><i class="material-icons">assignment</i> Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="dayreport.php">Day Report</a></li>
                                <li><a href="form_input_group.html">Monthly Report</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">devices_other</i>Other pags<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="delete.php">Delete</a></li>
                               
                                
                                
                            </ul>
                        </li>
                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

</body>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
        <script src="assets/plugins/animsition/js/animsition.min.js"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- STRAT PAGE LABEL PLUGINS -->
        <script src="assets/plugins/jQuery-mask-plugin/jquery.mask.min.js"></script>
        <script src="assets/plugins/jQuery-mask-plugin/examples.js"></script>
        <script src="assets/plugins/jquery.sumoselect/jquery.sumoselect.min.js"></script>
        <script src="assets/plugins/jquery.sumoselect/sumoselect-active.js"></script>
        <script src="assets/plugins/select2/select2.min.js"></script>
        <script src="assets/plugins/select2/select2-active.js"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js"></script>
        <script src="assets/dist/js/jQuery.style.switcher.js"></script>
        
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET","getsection.php?q="+str,true);
                    xmlhttp.send();
                }
            }
            </script>
            <script>
    function del() {
    var a=$("input[name='uname']").val();
    var b=$("input[name='pass']").val();
    if (a == "" && b=="") {
        document.getElementById("d").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("d").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","del.php?uname="+a+"&pass="+b,true);
        xmlhttp.send();
       
        
    }
    $('#nos').css("display","block");
 }
    </script>
</html>