<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}
$dbh1 = mysql_connect("localhost","root","",true); 
$dbh2 = mysql_connect("localhost","root","",true); 

mysql_select_db("sample_db", $dbh1);
mysql_select_db("abirami_db", $dbh2);
error_reporting(0);
$first1 = implode(',', $_POST['first']);
$second1= implode(',', $_POST['second']);

$movie=$_POST['movie'];
$shows=$_POST['shows'];
$date1=$_POST['today'];

    if (isset($_POST['shows']))
{?>

<!-- <script type="text/javascript">
    document.getElementById('printb').submit(); // SUBMIT FORM
	
</script> -->

<?php 
 
}
else
{
  // leave the page alone
}
echo $date1;
echo $shows;
$balcony1= implode(',', $_POST['balcony']);
$first = explode(',', $first1);
$second=explode(',', $second1);

$balcony=explode(',', $balcony1);
$bid= $_POST['id'];
$no=$_POST['nos'];
$rate=0;
$result1=mysql_query("SELECT layout FROM movie_tb where mname='$movie'",$dbh2);
while($row1 = mysql_fetch_array($result1)){

	$lout=$row1['layout'];
	}
if(isset($_POST['first']))
{
foreach ($first as $a1 )
{
    $result=mysql_query("SELECT afirst,asecond,abal FROM rate where timing='$shows' and `date`='$date1'",$dbh1);
    while($row = mysql_fetch_array($result)){

        $val=intval($row['afirst']);
        $val1=intval($row['asecond']);
        $val2=intval($row['abal']);
        }
        $val=$val+1;
	echo $a1;
	if($lout=='layout1'){
	$rate=$rate+80.82;
	}
	else if($lout=='layout2'){
		$rate=$rate+80.82;
	}
	else{
		$rate=$rate+115.85;
	}
mysql_query("INSERT INTO seat VALUES ('$bid','$movie','$shows', '$a1','$avail','$rate','$date1')",$dbh1);
mysql_query("INSERT INTO rate VALUES ('$bid','$shows','$date1','$val','$val1','$val2')",$dbh1); 
    }
   
}

if(isset($_POST['second']))
{
foreach ($second as $a2 )
{
    $result=mysql_query("SELECT afirst,asecond,abal FROM rate where timing='$shows' and `date`='$date1'",$dbh1);
    while($row = mysql_fetch_array($result)){

        $val=intval($row['afirst']);
        $val1=intval($row['asecond']);
        $val2=intval($row['abal']);
        }
        $val1=$val1+1;
    echo $a2;
	if($lout=='layout1'){
		$rate=$rate+64.29;
		}
		else if($lout=='layout2'){
			$rate=$rate+80.82;
		}
		else{
			$rate=$rate+115.85;
		}
mysql_query("INSERT INTO seat VALUES ('$bid','$movie','$shows', '$a2','$avail','$rate','$date1')",$dbh1);
mysql_query("INSERT INTO rate VALUES ('$bid','$shows','$date1','$val','$val1','$val2')",$dbh1);
}

}

if(isset($_POST['balcony']))
{
foreach ($balcony as $a3 )
{
    $result=mysql_query("SELECT afirst,asecond,abal FROM rate where timing='$shows' and `date`='$date1'",$dbh1);
    while($row = mysql_fetch_array($result)){

        $val=intval($row['afirst']);
        $val1=intval($row['asecond']);
        $val2=intval($row['abal']);
       
        }
        $val2=$val2+1;
        echo $a3;
    
		if($lout=='layout1'){
			$rate=$rate+92.31;
			}
			else if($lout=='layout2'){
				$rate=$rate+92.31;
			}
			else{
				$rate=$rate+155.09;
			}
mysql_query("INSERT INTO seat VALUES ('$bid','$movie','$shows', '$a3','$avail','$rate','$date1')",$dbh1);
mysql_query("INSERT INTO rate VALUES ('$bid','$shows','$date1','$val','$val1','$val2')",$dbh1);
}

}

?>

<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script >
$(document).ready(function(){
     $("#printb").submit();
});
</script>



</head>
<style type="text/css">
body, html {
	background: #222;
	height: 100%;
	margin: 0 auto;
	overflow-x: hidden;
}
#container {
}
#wrap {
	width: 300px;
	height: 200px;
	background: #333;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	box-shadow: 5px 5px #111;
}

.btn-wrap {
	width: 160px;
	height: 60px;
	background: #000;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.button {
	width: 150px;
	height: 50px;
	background: #000;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: white;
	padding-top: 13px;
	cursor: pointer;
}
.btn-before {
	position: absolute;
	right: 0;
	top: 0;
	height: 0px; 
	width: 5px;
	background: #6ddba8;
}

.btn-wrap:hover .btn-before {
	animation-name: btn-fill;
	animation-duration: 1s;
	animation-fill-mode: forwards;
	animation-direction: alternate;
	animation-timing-function: once;
}
@keyframes btn-fill {
	0% {
		transform: translate(0,0);
		height: 0px;
		width: 5px;
	}
	20% {
		transform: translate(0,0);
		height: 60px;
		width: 5px;
	}
	25% {
		transform: translate(0,55px);
		height: 5px;
		width: 5px;
	}
	40% {
		transform: translate(0,55px);
		height: 5px;
		width: 160px;
	}
	45% {
		transform: translate(-155px,55px);
		height: 5px;
		width: 5px;
	}
	65% {
		transform: translate(-155px,0px);
		height: 60px;
		width: 5px;
	}
	70% {
		transform: translate(-155px,0px);
		height: 5px;
		width: 5px;
	}
	90% {
		transform: translate(-5px,0px);
		height: 5px;
		width: 155px;
	}
	95% {
		transform: translate(0,0);
		height: 5px;
		width: 5px;
	}
	100% {
		transform: translate(0,0);
		height: 0px;
		width: 5px;
	}
}
</style>
<body>

<div id="container">
	<div id="wrap">
		<div class="btn-wrap">
			<div class="btn-before"></div>
            <?php $bid= $_POST['id'];?>
            <form action="bill1.php?id=<?php echo $bid;?>" method="post"   name="printb" id="printb">
			<input type="submit" class="button text-center" value="Print Bill" id="print">
            </form>
		</div>
	</div>
</div>
<form action="del.php" method="post">
<input type="text" value="<?php echo $shows ;?>" id="shows" name="shows" hidden/>
<input type="text" value="<?php echo $date1 ;?>" id="date1" name="date1" hidden/>
<input type="submit" value="Delete"/>
</form>


</body>


</html>