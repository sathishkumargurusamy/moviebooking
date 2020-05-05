<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:index.php");
}

 ?>
<html>
<style>
.menu_contanier{
    display:flex;
    flex-direction:column;
    position:absolute;
    left: 20px;

}
.menu1{
    display:flex;
    width:40px;
    margin-bottom:5px;
    height:10px;
    background-color:black;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
</style>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="home.css" media="screen" />

</head>

<body style="background-image: url('images1/2.gif'); background-repeat: no-repeat; background-size: 100% 100%;">
    <!-- Navigation -->
    <header class="header" style="width:100%;max-width: 100%;height: 8rem;margin-bottom: 53px;">
<div class='menu_contanier' onclick="openNav()">
<div class='menu1'>
</div>
<div class='menu1'>
</div>
<div class='menu1'>
</div>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a data-toggle="modal" data-target="#myModal">Cancel Ticket</a>
  <a href="index.php">Logout</a>
</div>

</header>
    <div class="container">

        <form action="add.php" method="post" id="addform">
            <?php
            include("config.php");

            ?>

            <div class="row">
                <?php
                include("config1.php");
                $result = mysql_query("SELECT mname,layout FROM movie_tb");

                ?>
                <div class="row">
                    <div class="col-md-4">
                        <div>

                            <div class="row">

                                <div class="col-md-12" style="border:0.5px grey solid;background-color:smokewhite; padding:20px;margin-right:2px ">
                                    <input type="date" name="today" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date("Y-m-d"); ?>" id="txtDate" autocomplete="off" onchange="showlayout1(this.value);" />

                                    <label style="color:black; font-family:sans-serif;">-------------------------------T I M E----------------------------</label>
                                    <br>

                                    <?php

                                    while ($row12 = mysql_fetch_array($result)) {
                                        $mname = $row12['mname'];
                                    }
                                    $status = mysql_query("SELECT shows from movie_tb WHERE mname = '$mname'");
                                    $i = 0;
                                    while ($sta = mysql_fetch_array($status)) {
                                        $show1 = explode(",", $sta['shows']);

                                        foreach ($show1 as $a) {

                                    ?>
                                            <div>
                                                <?php
                                                date_default_timezone_set('Asia/Kolkata');


                                                if (date("H:i", strtotime($a) + 5400) >= date("H:i")) {
                                                ?>
                                                    <input type="text" name="shows1" id="shows1" autocomplete="off" style="  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
color:black;
float:left;
  -webkit-box-shadow: none;
  box-shadow: none; margin:5px;padding:5px; height:30px;width:60px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/2.png'); background-size: 100% 100%;

       background-repeat: no-repeat;" value="<?php echo $a; ?>" onclick="showlayout(this.value); " readonly /><?php } ?></div>
                                    <?php $i = $i + 1;
                                        }
                                    } ?>
                                    <?php
                                    $status1 = mysql_query("SELECT shows from movie_tb WHERE mname = '$mname'");
                                    while ($sta = mysql_fetch_array($status1)) {
                                        $show2 = explode(",", $sta['shows']);
                                        foreach ($show2 as $a) {

                                    ?>
                                            <div>
                                                <?php
                                                date_default_timezone_set('Asia/Kolkata');
                                                if (date("H:i", strtotime($a) + 5400) < date("H:i")) {
                                                ?>
                                                    <input type="text" name="shows1" id="shows1" autocomplete="off" style="  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
color:black;
float:left;
  -webkit-box-shadow: none;
  box-shadow: none; margin:5px;padding:5px; height:30px;width:60px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/2.png'); background-size: 100% 100%;

       background-repeat: no-repeat;" value="<?php echo $a; ?>" onclick="showlayout(this.value); " readonly /><?php } ?></div>

                                    <?php }
                                    } ?>
                                    <?php
                                    include("config1.php");
                                    $result = mysql_query("SELECT * FROM movie_tb");
                                    $row13 = mysql_fetch_array($result);
                                    ?>
                                    <br>

                                    <label style="color:black;font-family:sans-serif;">-----------------------------C L A S S-----------------------------</label>
                                    <br>


                                    <input type="text" name="1" value="BOX" onclick="showDiv1()" readonly style="  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  
color:black;
  -webkit-box-shadow: none;
  box-shadow: none; margin:10px;padding:15px; height:40px;width:70px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/21.png'); background-size: 100% 100%;background-repeat: no-repeat;" />
                                    &nbsp;
                                    <input type="text" name="2" value="I CLASS" onclick="showDiv2()" readonly style="border-right: 0;border-top: 0;border-left: 0;border-bottom: 0;color:black;-webkit-box-shadow: none;box-shadow: none;  padding:15px; height:40px;width:80px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/21.png'); background-size: 100% 100%; background-repeat: no-repeat;" />
                                    &nbsp;&nbsp;
                                    <input type="text" name="3" value='<?php if ($row13['layout'] == "layout2" || $row13['layout'] == "layout3") {
                                                                            echo "I CLASS";
                                                                        } else {
                                                                            echo "II CLASS";
                                                                        } ?>' onclick="showDiv3()" readonly style="border-right: 0;border-top: 0;border-left: 0;border-bottom: 0;font-weight:200;color:black;-webkit-box-shadow: none;box-shadow: none;  padding:15px; height:40px;width:80px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/21.png'); background-size: 100% 100%;background-repeat: no-repeat;" />

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4" style="border-bottom:0.5px black solid; background-color:black;">
                        <h1 class="logo"><a href="#"><img src="logo11.png" style="width:100px; height:90px;" /></a></h1>
                        <input type="text" name="movie" style="letter-spacing:2px;" autocomplete="off" class="form-control" value="<?php

                                                                                                                                    echo $mname;
                                                                                                                                    ?>" readonly>

                        <?php
                        include("config.php");
                        $result = mysql_query("SELECT MAX(bid) AS max_id FROM seat ORDER BY bid DESC ");
                        $row = mysql_fetch_array($result);
                        $r = $row["max_id"];

                        $str = $r;
                        $str1 = $str + 1;

                        ?>
                        <input type="hidden" name="id" autocomplete="off" class="form-control" value="<?php echo $str1; ?>" />
                    </div>
                    <div class="col-md-4" style="border:0.5px solid grey;height:175px;">
                        <br>
                        <div style="font-size:20px;padding-left:20px;">
                            <label><?php 
                            $con = mysql_connect("localhost","root","");
                            mysql_select_db("abirami_db",$con);
                            $query=mysql_query("select * from user_tb",$con);
                            $row=mysql_fetch_array($query);
                            echo 'User:';
                            ?></label>
                            <b name="ticketsold"><?php echo $row['username']; ?></b><br>
                        </div>
                    </div>
                    <div id="layout">
                    </div>
                </div>
        </form>
        <!-- <div style="margin-top:200px;"> -->
            <b class="btn btn-info" data-toggle="modal" data-target="#myModal">CANCEL TICKET</b>&nbsp;&nbsp;&nbsp;
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title">CANCEL TICKET</h4>
                        </div>
                        <div class="modal-body">

                            <input type="text" id="tktno" placeholvalder="Enter Ticket number..." />
                            <label style="letter-spacing=1px;" onclick="showdelt()" class="btn btn-default" name="ok">OK</label>
                            <div id="showd">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" style="width:50px;margin-right:250px; height:50px;" value="X" class="btn btn-danger"><a href="abc.php" style="font-color:blue;font-size:20px;text-decoration:none;">X</a></button>
                        </div>
                    </div>

                </div>
            </div>
</body>
<script>
    $("document").ready(function() {

        $("#shows1").trigger('click');

    });

    function showdelt() {
        var da = $("input[id='tktno']").val();

        if (da == "") {
            document.getElementById("showd").innerHTML = "";
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
                    document.getElementById("showd").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "delt.php?d=" + da, true);
            xmlhttp.send();
        }
    }
    $(document).on('change', 'input[type="checkbox"]', function() {
        if ($('#nos option:selected').val() == '0') {

            if ($("input[type='checkbox']:checked").length > 0)
                $("input[type='checkbox']").attr('checked', false);
            $("#nos").css({
                "color": "#a94442",
                "background-color": "#f2dede",
                "border-color": "red",
                "padding": "1px 20px 1px 20px"
            });
            $("#nos").focus();
        } else {
            max = $('#nos').val();
            if ($("input[type='checkbox']:checked").length == max) {
                $("input[type='checkbox']").attr('disabled', 'disabled');

                $("input[type='checkbox']:checked").removeAttr('disabled');
            } else {
                if ($("input[type='checkbox']").hasAttribute('disabled') = true) {
                    this.attr('disabled', true);
                    $("input[type='checkbox']").removeAttr('disabled');
                }
            }
        }
    });
</script>

<script>
    function showlayout(str) {


        var da = $("input[name='today']").val();

        if (str == "") {
            document.getElementById("layout").innerHTML = "";
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
                    document.getElementById("layout").innerHTML = xmlhttp.responseText;
                    var countf = 0;
                    var counts = 0;
                    var countb = 0;
                    if ($(".input_class_checkbox").is(':disabled') || $(".input_class_checkbox1").is(':disabled') || $(".input_class_checkbox3").is(':disabled')) {
                        countf = $(".input_class_checkbox:disabled").length;
                        counts = $(".input_class_checkbox1:disabled").length;
                        countb = $(".input_class_checkbox3:disabled").length;

                    }

                    document.getElementById('tkts').innerHTML = counts;
                    document.getElementById('tktf').innerHTML = countf;
                    document.getElementById('tktb').innerHTML = countb;
                }
            }
            xmlhttp.open("GET", "layout.php?q=" + str + "&d=" + da, true);
            xmlhttp.send();


        }
        $('#nos').css("display", "block");


    }

    function showlayout1(str) {

        showavail(this.str);
        var da = $("select[name='shows']").val();

        if (str == "") {
            document.getElementById("layout").innerHTML = "";
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
                    document.getElementById("layout").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "layout.php?d=" + str + "&q=" + da, true);
            xmlhttp.send();


        }
        $('#nos').css("display", "block");
    }

    function showavail(str) {

        var da = $("select[name='shows']").val();

        if (str == "") {
            document.getElementById("layout").innerHTML = "";
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
                    document.getElementById("avail").innerHTML = xmlhttp.responseText;

                }
            }
            xmlhttp.open("GET", "layout.php?d=" + str + "&q=" + da, true);
            xmlhttp.send();


        }

        $('#nos').css("display", "block");
    }



    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day1 = dtToday.getDate() + 4;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var minDate = year + '-' + month + '-' + day;
        var maxDate = year + '-' + month + '-' + day1;

        $('#txtDate').attr('min', minDate);
        $('#txtDate').attr('max', maxDate);
    });


    $(window).bind("pageshow", function(event) {
        if (event.originalEvent.persisted) {
            window.location.reload();
        }
    });

    function showDiv1() {

        document.getElementById('bal').style.display = "block";
        document.getElementById('fc').style.display = "none";
        document.getElementById('sc').style.display = "none";
    }

    function showDiv2() {
        document.getElementById('fc').style.display = "block";
        document.getElementById('bal').style.display = "none";
        document.getElementById('sc').style.display = "none";
    }

    function showDiv3() {
        document.getElementById('sc').style.display = "block";
        document.getElementById('bal').style.display = "none";
        document.getElementById('fc').style.display = "none";
    }
    $("input.input_class_checkbox").click(function() {
        var theCheckboxes = $("select[name='nos']");
        if (theCheckboxes.selected == false) {
            $(this).removeAttr("checked");
            alert("Please selected one user at a time for editing.");

            return false;
        }
    });

    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</html>