<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
   
}?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
        
        [type="date"] {
            
  background:red url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type=date]::-webkit-clear-button {
    -webkit-appearance: none;
    display: none;
    
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}
       .chck {
  display: block;
  position: relative;
  padding-left: 29px;
  margin-bottom: 30px;
  margin-left: 2px;

  font-size: 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  float:left;
 
}

.form-control {
    font-family: 'Anton', sans-serif;
    font-size:14px;
    color:midnightblue;
    border:1px solid midnightblue;
    
}
/* Hide the browser's default checkbox */
.chck input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
* {
	box-sizing: border-box;
}
body {
    font-family: 'Anton', sans-serif;
    font-size:14px;
	line-height: 1.6;
	margin: 0;
	min-height: 100vh;
}
ul {
  margin: 0;
  padding: 0;
  list-style: none;
}


h2,
h3,
a {
	color: #34495e;
}

a {
	text-decoration: none;
}



.logo {
	margin: 0;
	font-size: 1.45em;
}

.main-nav {
	margin-top: 5px;

}
.logo{
    margin:0 auto;
}
.logo a,
.main-nav a {
	padding: 10px 15px;
	text-transform: uppercase;
	text-align: center;
	display: block;
}

.main-nav a {
	color: #34495e;
	font-size: .99em;
}

.main-nav a:hover {
	color: #718daa;
}



.header {
	padding-top: .5em;
	padding-bottom: .5em;
	border: 1px solid #a2a2a2;
	background-color: #f4f4f4;
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
    height:5px;
}


/* ================================= 
  Media Queries
==================================== */




@media (min-width: 769px) {
	.header,
	.main-nav {
		display: flex;
	}
	.header {
		flex-direction: column;
		align-items: center;
    	.header{
		width: 80%;
		margin: 0 auto;
		max-width: 1150px;
        height:5px;
	}
	}

}

@media (min-width: 1025px) {
	.header {
		flex-direction: row;
		justify-content: space-between;
	}

}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 30px;
  width: 30px;
  background:url(seat1.png) no-repeat top left;
}

/* On mouse-over, add a grey background color */
.chck:hover input ~ .checkmark {
    background:url(seat4.png) no-repeat top left;
}

/* When the checkbox is checked, add a blue background */
.chck input:checked ~ .checkmark {
    background:url(seat3.png) no-repeat top left;
}
.chck input:disabled ~ .checkmark {
    background:url(seat2.png) no-repeat top left;
}
/* Create the checkmark/indicator (hidden when not checked) */
.chck:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.chck input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */

        .container1{
            border:1px solid grey;
            width:50%;
            margin-left:5%;
            margin: 0 auto;
        }
       .container{
        margin: 0 auto;
       
       }
       .form-control{
           background-color:#f0effc;
           margin-bottom:10px;
       }
       
    </style>
    </head>
  
    <body style="background-image: url('images1/2.gif'); background-repeat: no-repeat; background-size: 100% 100%;">
    <!-- Navigation -->
    <header class="header" style="background-image: url('images1/3.gif'); background-repeat: no-repeat; background-size:100% 100%; ">
		
      
	</header>
    
    
        <div class="container" >
            
            <form action="add.php" method="post"  id="addform">  
            <?php 
include("config.php");
$result=mysql_query("SELECT sno FROM seat");
for($k='a';$k<='u';$k++)
    {
for($i='a';$i<='z';$i++)
    {	
for($j=1;$j<20;$j++){
    $j1=str_pad($j, 3, 'RR', STR_PAD_LEFT);
            					   
${$k.$i.$j1}="";
${$k.$i.$j}="";

}
    }
}
while($row = mysql_fetch_array($result)){
    
    $val= $row['sno'];
    list($part1,$part2,$part3)=explode("-",$val);
    if($part1=="f" || $part1=="s" || $part1=="t" || $part1=="b" ){
for($i='a';$i<='z';$i++)
    {
        
        for($j=1;$j<15;$j++)
        { 
            $j1=str_pad($j, 3, 'RR', STR_PAD_LEFT);
        
    $val1=array($part1,$i,$j1);
    $val2=array($part1,$i,$j);
    $array2=implode("-",$val1);
  
    $array1=implode("-",$val2);
   
    if($array2==$row['sno'] )
    {
       
        list($part1,$part2,$part3)=explode("-",$array2);
        ${$part1.$part2.$part3}="disabled";
    }
    if($array1==$row['sno']){
    
        list($part11,$part21,$part31)=explode("-",$array1);
       
        ${$part11.$part21.$part31}="disabled";
       
    }
}

}
    }

    }?>
  
  <div class="row" >
  <?php 
include("config1.php");
$result=mysql_query("SELECT mname FROM movie_tb");

?>
<div class="row">
<div class="col-md-4"><div>

<div class="row">

<div class="col-md-12" style="border:0.5px grey solid;background-color:smokewhite; ">
<input type="date" name="today" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date("Y-m-d"); ?>"  id="txtDate" autocomplete="off"  onchange="showlayout1(this.value);"/>

<label style="color:black; font-family:sans-serif;">-------------------------------T I M E----------------------------</label>
<br>

 <?php
 
 while($row12=mysql_fetch_array($result)){ 
    $mname=$row12['mname']; 
 }
  $status=mysql_query("SELECT shows from movie_tb WHERE mname = '$mname'");
  $i=0;
   while($sta=mysql_fetch_array($status))
   { 
     $show1=explode(",",$sta['shows']);
     
       foreach($show1 as $a)
       {
     
       ?>
       <div >
       <?php 
       date_default_timezone_set('Asia/Kolkata');
     
      
       if(date("H:i", strtotime($a)+1440)>=date("H:i")){
           ?>
<input type="text" name="shows1"  id="shows1" autocomplete="off"  style="  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
color:black;
float:left;
  -webkit-box-shadow: none;
  box-shadow: none; margin:5px;padding:5px; height:30px;width:60px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/2.png'); background-size: 100% 100%;

       background-repeat: no-repeat;" value="<?php  echo $a; ?>"  onclick="showlayout(this.value); " readonly/><?php }?></div>
<?php   $i=$i+1;}} ?>
<?php
$status1=mysql_query("SELECT shows from movie_tb WHERE mname = '$mname'");
while($sta=mysql_fetch_array($status1))
{ 
  $show2=explode(",",$sta['shows']);
foreach($show2 as $a)
       {
     
       ?>
       <div >
       <?php 
       date_default_timezone_set('Asia/Kolkata');
       if(date("H:i", strtotime($a)+1440)<date("H:i")){
           ?>
<input type="text" name="shows1"  id="shows1" autocomplete="off"  style="  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
color:black;
float:left;
  -webkit-box-shadow: none;
  box-shadow: none; margin:5px;padding:5px; height:30px;width:60px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/2.png'); background-size: 100% 100%;

       background-repeat: no-repeat;" value="<?php  echo $a; ?>"  onclick="showlayout(this.value); " readonly/><?php }?></div>

       <?php }}?>
<?php 
include("config1.php");
$result=mysql_query("SELECT * FROM movie_tb");
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
  box-shadow: none; margin:10px;padding:15px; height:40px;width:70px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/21.png'); background-size: 100% 100%;background-repeat: no-repeat;"/>
 &nbsp;
    <input type="text" name="2" value="I CLASS" onclick="showDiv2()" readonly style="border-right: 0;border-top: 0;border-left: 0;border-bottom: 0;color:black;-webkit-box-shadow: none;box-shadow: none;  padding:15px; height:40px;width:80px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/21.png'); background-size: 100% 100%; background-repeat: no-repeat;"/>
    &nbsp;&nbsp;
    <input type="text" name="3" value='<?php if($row13['layout']=="layout2" || $row13['layout']=="layout3"){ echo "I CLASS"; } else { echo "II CLASS"; } ?>' onclick="showDiv3()" readonly style="border-right: 0;border-top: 0;border-left: 0;border-bottom: 0;font-weight:200;color:black;-webkit-box-shadow: none;box-shadow: none;  padding:15px; height:40px;width:80px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/21.png'); background-size: 100% 100%;background-repeat: no-repeat;"/>

               </div></div>
                               
            </div> </div>

    <div class="col-md-4" style="border-bottom:0.5px black solid; background-color:black;">
    <h1 class="logo"><a href ="#"><img src="logo11.png" style="width:100px; height:90px;"/></a></h1>
    <input type="text" name="movie" autocomplete="off"  class="form-control" value="<?php
       
  echo $mname;
   ?>" readonly>
  
  <?php
  include("config.php");
 $result = mysql_query("SELECT MAX(bid) AS max_id FROM seat ORDER BY bid DESC ");
 $row = mysql_fetch_array($result);
 $r=$row["max_id"];

 $str=$r;
 $str1=$str+1;
 
 ?>
  <input type="hidden" name="id" autocomplete="off"  class="form-control" value="<?php echo $str1;?>" />
  
  
 
 
  
  
  </div>
  <div class="col-md-4" style="border:0.5px solid grey;height:175px;">
    <br>
    <div style="font-size:20px;padding-left:20px;">
    <label><?php if($row13['layout']=='layout1'){echo 'II Class:';}else{echo 'I Class:';}?></label>
    <b name="ticketsold" id="tkts"></b><br>
    <label>I Class:</label>
    <b name="ticketsold" id="tktf"></b><br>
    <label>BOX:</label>
    <b name="ticketsold" id="tktb"></b>
    </div>
    </div>
  
  <div id="layout" >
 
  
</div>

    
 
  
    
  </div>
  

  
  
  
            </form>
            
            <div style="margin-top:90px;">    
        <b class="btn btn-info" data-toggle="modal" data-target="#myModal">CANCEL TICKET</b>&nbsp;&nbsp;&nbsp;
             <b class="btn btn-danger"><a href="index.php" style="text-decoration:none;font-size:20px;">LOGOUT</a></b>
               <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">CANCEL TICKET</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="tktno" placeholvalder="Enter Ticket number..."  />
          <label style="letter-spacing=1px;"onclick="showdelt()" class="btn btn-default"  name="ok" >OK</label>
          <div id="showd"> 
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" ><a href="abc.php" style="text-decoration:none;">X</a></button>
        </div>
      </div>
      
    </div> 
             </div>
            
       
    </body>
    <script>
   
    $("document").ready(function() {
        
    $("#shows1").trigger('click');
   
});
    function showdelt(){
        var da=$("input[id='tktno']").val();
        
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
        xmlhttp.open("GET","delt.php?d="+da,true);
        xmlhttp.send(); 
    }
    }
    $(document).on('change','input[type="checkbox"]',function(){
        if ($('#nos option:selected').val() == '0'){
           
            if($("input[type='checkbox']:checked").length>0)
            $("input[type='checkbox']").attr('checked', false);
            $("#nos").css({ "color": "#a94442","background-color": "#f2dede",
  "border-color": "red",
  "padding":"1px 20px 1px 20px"});
  $("#nos").focus();
        }
        else {
        max= $('#nos').val();       
        if( $("input[type='checkbox']:checked").length == max ){
            $("input[type='checkbox']").attr('disabled', 'disabled');
            
            $("input[type='checkbox']:checked").removeAttr('disabled');
        }else{
            if($("input[type='checkbox']").hasAttribute('disabled')=true){
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
                var countf=0; var counts=0; var countb=0;
   if($(".input_class_checkbox").is(':disabled') || $(".input_class_checkbox1").is(':disabled')|| $(".input_class_checkbox3").is(':disabled'))
    {
        countf=$(".input_class_checkbox:disabled").length;
        counts=$(".input_class_checkbox1:disabled").length;
        countb=$(".input_class_checkbox3:disabled").length;
        
    }
    document.getElementById('tkts').innerHTML=counts;
    document.getElementById('tktf').innerHTML=countf;
    document.getElementById('tktb').innerHTML=countb;
            }
        }
        xmlhttp.open("GET","layout.php?q="+str+"&d="+da,true);
        xmlhttp.send();
        
        
    }
    $('#nos').css("display","block");
    
    
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
       xmlhttp.open("GET","layout.php?d="+str+"&q="+da,true);
       xmlhttp.send();
      
       
   }
   $('#nos').css("display","block");
}

function  showavail(str) {
  
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
       xmlhttp.open("GET","layout.php?d="+str+"&q="+da,true);
       xmlhttp.send();
      
       
   }
   
   $('#nos').css("display","block");
}



$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth()+1 ;
    var day1 = dtToday.getDate()+4;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
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
    if (theCheckboxes.selected==false) {
        $(this).removeAttr("checked");
        alert( "Please selected one user at a time for editing." );

        return false;
    }
});


</script>



    </html>