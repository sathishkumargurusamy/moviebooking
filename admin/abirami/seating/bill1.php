<?php
$dbh1 = mysql_connect("localhost","root","",true); 
$dbh2 = mysql_connect("localhost","root","",true); 

mysql_select_db("sample_db", $dbh1);
mysql_select_db("abirami_db", $dbh2);
error_reporting(0);
$id=$_GET['id'];
$i=0;
$i1=0;
$result1=mysql_query("SELECT * FROM seat where bid='$id' ",$dbh1);
$sno1[0]="";
while($row = mysql_fetch_array($result1)){
  $i=$i+1;
  $bid=$row['bid'];
  $amount=$row['rate'];
  $mname=$row['moviename'];
$timing =$row['timing'];

$date1=$row['date'];     
$date=date_create($date1);
$date2= date_format($date,"d/m/Y");      

        }
        $i1=$amount/$i;   
        $result2=mysql_query("SELECT layout FROM movie_tb where mname='$mname' ",$dbh2);
    
        while($row2 = mysql_fetch_array($result2)){

          $lout=$row2['layout'];
          
          }
    $result=mysql_query("SELECT sno FROM seat where bid='$id' ",$dbh1);
    while($row = mysql_fetch_array($result)){
$sno=$row['sno'];
        $sno1=explode("-",$sno);
        if($sno1[0]=='f')
        {
          
          $class="FIRST CLASS";
          if($lout=='layout1'){
$e=6.47;
$mc=2.00;
$t=$e+$mc+$i1;
$twe=10.71;
$tt=$t+$twe;
          }
          else if($lout=='layout2'){
            $e=6.47;
            $mc=2.00;
            $t=$e+$mc+$i1;
            $twe=10.71;
            $tt=$t+$twe;
                      }
                      else{
                        $e=9.27;
            $mc=2.00;
            $t=$e+$mc+$i1;
            $twe=22.88;
            $tt=$t+$twe;
                      }
        }else if($sno1[0]=='s'){
          $class="SECOND CLASS";
          if($lout=='layout1'){
            $e=5.14;
            $mc=2.00;
            $t=$e+$mc+$i1;
            $twe=8.57;
            $tt=$t+$twe;
                      }
                      else if($lout=='layout2'){
                        $e=6.47;
                        $mc=2.00;
                        $t=$e+$mc+$i1;
                        $twe=10.71;
                        $tt=$t+$twe;
                                  }
                                  else{
                                    $e=9.27;
                        $mc=2.00;
                        $t=$e+$mc+$i1;
                        $twe=22.88;
                        $tt=$t+$twe;
                                  }
        }
        else{
          $class="BALCONY";
          if($lout=='layout1'){
            $e=7.38;
            $mc=2.00;
            $t=$e+$mc+$i1;
            $twe=18.31;
            $tt=$t+$twe;
                      }
                      else if($lout=='layout2'){
                        $e=7.38;
                        $mc=2.00;
                        $t=$e+$mc+$i1;
                        $twe=18.31;
                        $tt=$t+$twe;
                                  }
                                  else{
                                    $e=12.41;
                        $mc=2.00;
                        $t=$e+$mc+$i1;
                        $twe=30.50;
                        $tt=$t+$twe;
                                  }
        }
        
    }
?>
<html>

<head>

<link rel="stylesheet" type="text/css" media="screen" href="bill.css">
</head>

<body>
<div id="divToPrint">
<div id="showScroll" class="container">

	<div class="receipt" style="height:220px; background-image:url('logo1.png');
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;">
  
        <div style="height: 20px; width: 100%; border-color: black; border-width:0px;">
        <p class="logo" style="font-family:Impact; text-transform:uppercase;"><b>Abirami Theatre</b></p>

    </div>
    
		<div class="address">
      <b style="font-size:11px;margin-bottom:4px;text-align:center; letter-spacing: 2px;">(GSTIN:33AAEFA3724B1Z8)</b><br>
    <b style=" letter-spacing: 0.5px;">SH 21 Vettaikaranpudur,Pollachi-642129</b>
		</div>
    <p class="surveyID"  style="margin-bottom:2px;">-----------<b class="detail" style="font-size: 9px; text-align: center;" ><?php echo $date2; ?></b>---------</p>
    
                
	
		<div class="transactionDetails">
            <div class="detail" style="font-size: 14px; letter-spacing: 1px; font-weight:bolder;"><u><b><?php echo $mname; ?></b></u></div>
        
            <div class="paymentDetails">
        <div class="detail" style="font-size:14px;"><b>NO:</b> <b style="font-size:14px;"><?php echo $bid;?></b></div>
        <div class="detail" style="font-size:16px;"><b><?php echo $timing; ?></b></div>
      </div>
      <div class="paymentDetails">
        <div class="detail"><b><?php if($class=="FIRST CLASS"){echo "<b style='font-size:18px;'>I</b> <b style='font-size:14px;'>CLASS";} else if($class=="SECOND CLASS"){if($lout=="layout1"){echo "<b style='font-size:18px;'>II</b> <b style='font-size:14px;'>CLASS";}else{echo "<b style='font-size:18px;'>I</b> <b style='font-size:14px;'>CLASS";}} else{echo "<b style='font-size:16px;'>BOX</b>";} ?></div>
        <div class="detail"><b style="font-size:12px; font-weight:bolder;">Tkt:</b><b style="font-size:18px; font-weight:bolder;"><?php echo $i;  ?></b></div>
      </div>
		
		</div>
		
    <div class="paymentDetails">
        <div class="detail"><b>Ticket Rate</div>
        <div class="detail"><?php echo $i1?></div>
      </div>
    <div class="paymentDetails">
        <div class="detail"><b>MC</div>
        <div class="detail"><?php echo $mc,".00"?></div>
      </div>
      <div class="paymentDetails">
          <div class="detail"><b>Local(8%)</div>
          <div class="detail"><?php echo $e?></div>
        </div>
        <div class="paymentDetails">
            <div class="detail"><b>GST(12%)</div>
            <div class="detail"><?php echo $twe?></div>
          </div>
          <div class="paymentDetails">
              <div class="detail"><b>Per Ticket</div>
              <div class="detail"><?php 
  echo $tt,".00";  ?></div>
            </div>
            

            
		<div class="paymentDetails bold">
			<div class="detail"><b style="font-size:14px; font-weight:bolder;">TOTAL<b  style="font-size:11px;font-weight:bolder;">(<?php echo $tt,x,$i ?>)</b></b></div>
      <div class="detail"><b style="font-size:14px; font-weight:bolder;">Rs.<?php echo $tt*$i;?></b></div>
  </div>
		

        
      </div>
      </div>
  
      <p class="surveyID" align="center" style="font-size:10px;">-------------TEAR HERE------------</p>
      <div id="showScroll" class="container">
      <div class="receipt" style="height:245px;">
  
      <div style="height: 20px; width: 100%; border-color: black; border-width:0px;">
      <p class="logo" style="font-family:Impact; text-transform:uppercase;"><b>Abirami Theatre</b></p>

    </div>
    
		<div class="address">
      <b style="font-size:11px;margin-bottom:4px;text-align:center; letter-spacing: 2px;">(GSTIN:33AAEFA3724B1Z8)</b><br>
    <b style=" letter-spacing: 0.5px;">SH 21 Vettaikaranpudur,Pollachi-642129</b>
		</div>
    <p class="surveyID"  style="margin-bottom:2px;">-------------<b class="detail" style="font-size: 9px; text-align: center;" ><?php echo $date2; ?></b>---------</p>
    
                
	
		<div class="transactionDetails">
            <div class="detail" style="font-size: 14px; letter-spacing: 1px; font-weight:bolder;"><u><b><?php echo $mname; ?></b></u></div>
        
            <div class="paymentDetails">
        <div class="detail" style="font-size:14px;"><b>NO:</b> <b style="font-size:14px;"><?php echo $bid;?></b></div>
        <div class="detail" style="font-size:16px;"><b><?php if($timing=="6 AM"){echo "5:45 AM";}
        else if($timing=="10 AM"){echo "9:45 AM";}
        else if($timing=="1:50 PM"){echo "1:45 PM";}
        else if($timing=="6 PM"){echo "5:45 PM";}
        else{echo "9:45 PM";} ?></b></div>
      </div>
      <div class="paymentDetails">
        <div class="detail"><b><?php if($class=="FIRST CLASS"){echo "<b style='font-size:18px;'>I</b> <b style='font-size:14px;'>CLASS";} elseif($class=="SECOND CLASS"){if($lout=="layout1"){echo "<b style='font-size:18px;'>II</b> <b style='font-size:14px;'>CLASS";}else{echo "<b style='font-size:18px;'>I</b> <b style='font-size:14px;'>CLASS";}} else{echo "<b style='font-size:18px;'>BOX</b>";} ?></div>
        <div class="detail"><b style="font-size:12px; font-weight:bolder;">Tkt:</b><b style="font-size:18px; font-weight:bolder;"><?php echo $i;  ?></b></div>
      </div>
		
		</div>
		
    <div class="paymentDetails">
        <div class="detail"><b>Ticket Rate</div>
        <div class="detail"><?php echo $i1?></div>
      </div>
    <div class="paymentDetails">
        <div class="detail"><b>MC</div>
        <div class="detail"><?php echo $mc,".00"?></div>
      </div>
      <div class="paymentDetails">
          <div class="detail"><b>Local(8%)</div>
          <div class="detail"><?php echo $e?></div>
        </div>
        <div class="paymentDetails">
            <div class="detail"><b>GST(12%)</div>
            <div class="detail"><?php echo $twe?></div>
          </div>
          <div class="paymentDetails">
              <div class="detail"><b>Per Ticket</div>
              <div class="detail"><?php 
  echo $tt,".00";  ?></div>
            </div>
            

            
		<div class="paymentDetails bold">
			<div class="detail"><b style="font-size:14px; font-weight:bolder;">TOTAL<b  style="font-size:11px;font-weight:bolder;">(<?php echo $tt,x,$i ?>)</b></b></div>
      <div class="detail"><b style="font-size:14px; font-weight:bolder;">Rs.<?php echo $tt*$i;?></b></div>
  </div>
		<div class="survey bold">

        <p class="surveyID">****************************</p>
        <p class="surveyID">Thank You! நன்றி !</p>

       
      </div>
		
			
		
</div>
</div>

</div>

<button id='btnPrint'  class="btn btn-primary">Print</button> <a href='abc.php' ><input type='button'  value='Back' class="btn btn-primary"></a></body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script  type="text/javascript">
$(function () {
 $(document).ready(function(){
    $("#btnPrint").trigger('click'); 
});

    $("#btnPrint").click(function () {
        var contents = $("#divToPrint").html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html><head><title>bill</title>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="bill.css" rel="stylesheet" type="text/css" media="print" />');
        //Append the DIV contents.
        frameDoc.document.write(contents);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
});
</script>
<script type="text/javascript">
 function closeWindow() {
    setTimeout(function() {
      window.location = "abc.php";
    }, 800);
    }

    window.onload = closeWindow();
    </script>

</html>