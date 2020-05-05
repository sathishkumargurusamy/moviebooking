<?php
include("config.php");
error_reporting(0);
$id=$_GET['id'];

$result1=mysql_query("SELECT * FROM seat where bid='$id' ");
while($row = mysql_fetch_array($result1)){
  $bid=$row['bid'];
  $amount=$row['rate'];
  $mname=$row['moviename'];
$timing =$row['timing'];
$date1=$row['date'];     
$date=date_create($date1);
$date2= date_format($date,"d/m/Y");      
        }
   
  
    $result=mysql_query("SELECT sno FROM seat where bid='$id' ");
    while($row = mysql_fetch_array($result)){
$sno[]=$row['sno'];
        $sno1=implode(" ",$sno);
        
    }
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Receipt</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A5 }</style>

  <!-- Custom styles for this document -->
  <link href='https://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
  <style>
    body   { font-family: serif }
    h1     { font-family: 'Lucida Bright'; font-size: 20pt; line-height: 10mm}
    h2, h3 { font-family: ' Lucida Fax'; font-size: 18pt; line-height: 7mm }
    h4     { font-size: 20pt; line-height: 14mm }
    h2 + p { font-size: 18pt; line-height: 7mm }
    h3 + p { font-size: 14pt; line-height: 7mm }
    li     { font-size: 10pt; line-height: 5mm }
    h1      { margin: 0 }
    h1 + ul { margin: 2mm 0 5mm }
    h2, h3  { margin: 0 3mm 3mm 0; float: left }
    h2 + p,
    h3 + p  { margin: 0 0 3mm 50mm }
    h4      { margin: 2mm 0 0 50mm; border-bottom: 2px solid black }
    h4 + ul { margin: 5mm 0 0 50mm }
    article { border: 4px double black; padding: 5mm 10mm; border-radius: 3mm }
  </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A3">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
  <div style="float:right;">
    <img src="logo.png" style="width:200px;height:110px;"/>
    </div>
    <h1>Abirami Theatre</h1>
    <h6 style=
    "font-size:15px;">SH 21 Vettaikaranpudur, Coimbatore, Tamil Nadu 642129</h6>

    <article>
    <h3>Movie:</h3>
      <p><?php echo $mname; ?></p>
      <h2>Booking ID:</h2>
      <p><?php echo $bid;?></p>
      
      <h3>Seats:</h3>
      <p><?php echo $sno1 ?></p>
      <h3>Timing:</h3>
      <p><?php echo $timing; ?></p>
      <h4>&#8377;<?php echo $amount;?> /-</h4>
      <h3>Date:</h3>
      <p><?php echo $date2; ?></p>
    
     
     
    </article>

  </section>

</body>

</html>