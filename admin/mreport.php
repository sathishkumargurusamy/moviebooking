<link href="assets/plugins/footable-bootstrap/css/footable.core.min.css" rel="stylesheet" type="text/css"/>
<div class="table-responsive" style="font-size:10px;">

<table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter >
                                            <thead>
                                                <tr>
                                                
                                                <th>Date</th>
                                                <th>Rate</th>
                                                
                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	
                                            <?php
                                            include 'header.php';
                                            include 'config.php';
                                            include 'config1.php';
                                            $dbh2 = mysql_connect("localhost","root","",true); 
                                            $dbh1 = mysql_connect("localhost","root","",true);
                                            mysql_select_db("abirami_db", $dbh2);
                                            mysql_select_db("sample_db", $dbh1);
                                            error_reporting(0);
                                            $from=$_GET['d'];
                                            $to=$_GET['to'];
                                           
                                            
                                          $totalamnt=0;
     $result4=mysql_query("SELECT moviename FROM seat",$dbh1);
     while($row4 = mysql_fetch_array($result4)){
         $mname=$row4['moviename'];
        
     }
     
     $result5=mysql_query("SELECT layout FROM movie_tb where mname='$mname'",$dbh2);
     while($row5 = mysql_fetch_array($result5)){
        $lout=$row5['layout'];
        
    }
$result=mysql_query("SELECT * FROM rate WHERE date='$from' and timing='6 AM' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);	
echo  "SELECT * FROM rate WHERE date BETWEEN('$from','$to') and timing='6 AM' ORDER BY afirst DESC,asecond DESC,abal DESC ";
$result1=mysql_query("SELECT * FROM rate WHERE date='$from'and timing=' 1:50 PM' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);

$result2=mysql_query("SELECT * FROM rate WHERE date='$from'and timing=' 9:50 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);
$result3=mysql_query("SELECT * FROM rate WHERE date='$from'and timing=' 6 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);
$result4=mysql_query("SELECT * FROM rate WHERE date='$from'and timing=' 10 AM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);				   
$i=0;
while($row = mysql_fetch_array($result))
{

?>
<tr>
<td><?php echo $row['date'];?></td>
                            
                                               <?php
                                            $f=$row['afirst'];
                                            $s=$row['asecond'];
                                            $b=$row['abal'];
                                            $total=$f+$s+$b;
                                            if($lout=="layout1")
                                            {
                                            $fm=$row['afirst']*80.82;
                                            $sm=$row['asecond']*64.29;
                                            $bm=$row['abal']*92.31;
                                            $fme=round(80.82*8/100,2)*$row['afirst'];
                                            $sme=round(64.29*8/100,2)*$row['asecond'];
                                            $bme=round(92.31*8/100,2)*$row['abal'];
                                                $fmc=2.00*$row['afirst'];
                                                $smc=2.00*$row['asecond'];
                                                $bmc=2.00*$row['abal'];
                                                $ft1=$fm+$fme+$fmc;
                                                $st1=$sm+$sme+$smc;
                                                $bt1=$bm+$bme+$bmc;
                                                $ftw=round(89.29*12/100,2)*$row['afirst'];
                                                $stw=round(71.43*12/100,2)*$row['asecond'];
                                                $btw=round(101.69*18/100,2)*$row['abal'];
                                                $ft2=$ft1+$ftw;
                                                $st2=$st1+$stw;
                                                $bt2=round($bt1+$btw);
                                                $twot=$fm+$sm+$bm;
                                                $twt=$ft2+$st2+$bt2;
                                                $te=$fme+$sme+$bme;
                                                $tmc=$fmc+$smc+$bmc;
                                                $ttw=$ftw+$stw+$btw; 
                                                $ttt=$ft2+$st2+$bt2;   
                                            }
                                            else if($lout=="layout2")
                                            {
                                            $fm=$row['afirst']*80.82;
                                            $sm=$row['asecond']*80.82;
                                            $bm=$row['abal']*92.31;
                                            $fme=round(80.82*8/100,2)*$row['afirst'];
                                            $sme=round(80.82*8/100,2)*$row['asecond'];
                                            $bme=round(92.31*8/100,2)*$row['abal'];
                                                $fmc=2.00*$row['afirst'];
                                                $smc=2.00*$row['asecond'];
                                                $bmc=2.00*$row['abal'];
                                                $ft1=$fm+$fme+$fmc;
                                                $st1=$sm+$sme+$smc;
                                                $bt1=$bm+$bme+$bmc;
                                                $ftw=round(89.29*12/100,2)*$row['afirst'];
                                                $stw=round(89.29*12/100,2)*$row['asecond'];
                                                $btw=round(101.69*18/100,2)*$row['abal'];
                                                $ft2=$ft1+$ftw;
                                                $st2=$st1+$stw;
                                                $bt2=round($bt1+$btw);
                                                $twot=$fm+$sm+$bm;
                                                $twt=$ft2+$st2+$bt2;
                                                $te=$fme+$sme+$bme;
                                                $tmc=$fmc+$smc+$bmc;
                                                $ttw=$ftw+$stw+$btw; 
                                                $ttt=$ft2+$st2+$bt2;   
                                            }
                                            else 
                                            {
                                            $fm=$row['afirst']*115.85;
                                            $sm=$row['asecond']*115.85;
                                            $bm=$row['abal']*200;
                                            $fme=round(115.85*8/100,2)*$row['afirst'];
                                            $sme=round(115.85*8/100,2)*$row['asecond'];
                                            $bme=round(92.31*0/100,2)*$row['abal'];
                                                $fmc=2.00*$row['afirst'];
                                                $smc=2.00*$row['asecond'];
                                                $bmc=0*$row['abal'];
                                                $ft1=$fm+$fme+$fmc;
                                                $st1=$sm+$sme+$smc;
                                                $bt1=$bm+$bme+$bmc;
                                                $ftw=round(127.12*18/100,2)*$row['afirst'];
                                                $stw=round(127.12*18/100,2)*$row['asecond'];
                                                $btw=round(101.69*0/100,2)*$row['abal'];
                                                $ft2=$ft1+$ftw;
                                                $st2=$st1+$stw;
                                                $bt2=round($bt1+$btw);
                                                $twot=$fm+$sm+$bm;
                                                $twt=$ft2+$st2+$bt2;
                                                $te=$fme+$sme+$bme;
                                                $tmc=$fmc+$smc+$bmc;
                                                $ttw=$ftw+$stw+$btw; 
                                                $ttt=$ft2+$st2+$bt2;   
                                            }

                                      
                                               ?>
                                                    
                                                   
                                                                                               

                                               
                                                <?php $totalamnt=$totalamnt+$ttt; } ?>
                                                
                                               <?php while($row1 = mysql_fetch_array($result1))
{

?>
                                                
                                               <?php
                                           $f=$row1['afirst'];
                                           $s=$row1['asecond'];
                                           $b=$row1['abal'];
                                           $total=$f+$s+$b;
                                           if($lout=="layout1")
                                           {
                                           $fm=$row1['afirst']*80.82;
                                           $sm=$row1['asecond']*64.29;
                                           $bm=$row1['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row1['afirst'];
                                           $sme=round(64.29*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*8/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=2.00*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row1['afirst'];
                                               $stw=round(71.43*12/100,2)*$row1['asecond'];
                                               $btw=round(101.69*18/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else if($lout=="layout2")
                                           {
                                           $fm=$row1['afirst']*80.82;
                                           $sm=$row1['asecond']*80.82;
                                           $bm=$row1['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row1['afirst'];
                                           $sme=round(80.82*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*8/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=2.00*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row1['afirst'];
                                               $stw=round(89.29*12/100,2)*$row1['asecond'];
                                               $btw=round(101.69*18/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else 
                                           {
                                           $fm=$row['afirst']*115.85;
                                           $sm=$row['asecond']*115.85;
                                           $bm=$row['abal']*200;
                                           $fme=round(115.85*8/100,2)*$row1['afirst'];
                                           $sme=round(115.85*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*0/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=0*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(127.12*18/100,2)*$row1['afirst'];
                                               $stw=round(127.12*18/100,2)*$row1['asecond'];
                                               $btw=round(101.69*0/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }

                                     
                                              ?>
                                        
                                                                                       
                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
                                             <?php   while($row2 = mysql_fetch_array($result2))
{

?>
                                                
                                               <?php
                                           $f=$row2['afirst'];
                                           $s=$row2['asecond'];
                                           $b=$row2['abal'];
                                           $total=$f+$s+$b;
                                           if($lout=="layout1")
                                           {
                                           $fm=$row2['afirst']*80.82;
                                           $sm=$row2['asecond']*64.29;
                                           $bm=$row2['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row2['afirst'];
                                           $sme=round(64.29*8/100,2)*$row2['asecond'];
                                           $bme=round(92.31*8/100,2)*$row2['abal'];
                                               $fmc=2.00*$row2['afirst'];
                                               $smc=2.00*$row2['asecond'];
                                               $bmc=2.00*$row2['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row2['afirst'];
                                               $stw=round(71.43*12/100,2)*$row2['asecond'];
                                               $btw=round(101.69*18/100,2)*$row2['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else if($lout=="layout2")
                                           {
                                           $fm=$row2['afirst']*80.82;
                                           $sm=$row2['asecond']*80.82;
                                           $bm=$row2['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row2['afirst'];
                                           $sme=round(80.82*8/100,2)*$row2['asecond'];
                                           $bme=round(92.31*8/100,2)*$row2['abal'];
                                               $fmc=2.00*$row2['afirst'];
                                               $smc=2.00*$row2['asecond'];
                                               $bmc=2.00*$row2['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row2['afirst'];
                                               $stw=round(89.29*12/100,2)*$row2['asecond'];
                                               $btw=round(101.69*18/100,2)*$row2['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else 
                                           {
                                           $fm=$row['afirst']*115.85;
                                           $sm=$row['asecond']*115.85;
                                           $bm=$row['abal']*200;
                                           $fme=round(115.85*8/100,2)*$row2['afirst'];
                                           $sme=round(115.85*8/100,2)*$row2['asecond'];
                                           $bme=round(92.31*0/100,2)*$row2['abal'];
                                               $fmc=2.00*$row['afirst'];
                                               $smc=2.00*$row['asecond'];
                                               $bmc=0*$row['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(127.12*18/100,2)*$row2['afirst'];
                                               $stw=round(127.12*18/100,2)*$row2['asecond'];
                                               $btw=round(101.69*0/100,2)*$row2['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }

                                     
                                              ?>
                                                                                       

                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
                                                <?php while($row1 = mysql_fetch_array($result3))
{

?>
                                                
                                               <?php
                                           $f=$row1['afirst'];
                                           $s=$row1['asecond'];
                                           $b=$row1['abal'];
                                           $total=$f+$s+$b;
                                           if($lout=="layout1")
                                           {
                                           $fm=$row1['afirst']*80.82;
                                           $sm=$row1['asecond']*64.29;
                                           $bm=$row1['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row1['afirst'];
                                           $sme=round(64.29*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*8/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=2.00*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row1['afirst'];
                                               $stw=round(71.43*12/100,2)*$row1['asecond'];
                                               $btw=round(101.69*18/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else if($lout=="layout2")
                                           {
                                           $fm=$row1['afirst']*80.82;
                                           $sm=$row1['asecond']*80.82;
                                           $bm=$row1['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row1['afirst'];
                                           $sme=round(80.82*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*8/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=2.00*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row1['afirst'];
                                               $stw=round(89.29*12/100,2)*$row1['asecond'];
                                               $btw=round(101.69*18/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else 
                                           {
                                           $fm=$row['afirst']*115.85;
                                           $sm=$row['asecond']*115.85;
                                           $bm=$row['abal']*200;
                                           $fme=round(115.85*8/100,2)*$row1['afirst'];
                                           $sme=round(115.85*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*0/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=0*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(127.12*18/100,2)*$row1['afirst'];
                                               $stw=round(127.12*18/100,2)*$row1['asecond'];
                                               $btw=round(101.69*0/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }

                                     
                                              ?>
                                                                                       
                                        
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
                                                <?php while($row1 = mysql_fetch_array($result4))
{

?>
                                            
                                               <?php
                                           $f=$row1['afirst'];
                                           $s=$row1['asecond'];
                                           $b=$row1['abal'];
                                           $total=$f+$s+$b;
                                           if($lout=="layout1")
                                           {
                                           $fm=$row1['afirst']*80.82;
                                           $sm=$row1['asecond']*64.29;
                                           $bm=$row1['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row1['afirst'];
                                           $sme=round(64.29*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*8/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=2.00*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row1['afirst'];
                                               $stw=round(71.43*12/100,2)*$row1['asecond'];
                                               $btw=round(101.69*18/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else if($lout=="layout2")
                                           {
                                           $fm=$row1['afirst']*80.82;
                                           $sm=$row1['asecond']*80.82;
                                           $bm=$row1['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row1['afirst'];
                                           $sme=round(80.82*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*8/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=2.00*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row1['afirst'];
                                               $stw=round(89.29*12/100,2)*$row1['asecond'];
                                               $btw=round(101.69*18/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }
                                           else 
                                           {
                                           $fm=$row['afirst']*115.85;
                                           $sm=$row['asecond']*115.85;
                                           $bm=$row['abal']*200;
                                           $fme=round(115.85*8/100,2)*$row1['afirst'];
                                           $sme=round(115.85*8/100,2)*$row1['asecond'];
                                           $bme=round(92.31*0/100,2)*$row1['abal'];
                                               $fmc=2.00*$row1['afirst'];
                                               $smc=2.00*$row1['asecond'];
                                               $bmc=0*$row1['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(127.12*18/100,2)*$row1['afirst'];
                                               $stw=round(127.12*18/100,2)*$row1['asecond'];
                                               $btw=round(101.69*0/100,2)*$row1['abal'];
                                               $ft2=$ft1+$ftw;
                                               $st2=$st1+$stw;
                                               $bt2=round($bt1+$btw);
                                               $twot=$fm+$sm+$bm;
                                               $twt=$ft2+$st2+$bt2;
                                               $te=$fme+$sme+$bme;
                                               $tmc=$fmc+$smc+$bmc;
                                               $ttw=$ftw+$stw+$btw; 
                                               $ttt=$ft2+$st2+$bt2;   
                                           }

                                     
                                              ?>
                                                                                         
                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>

                                            <td> <?php echo $totalamnt;?></td>
</tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                
                                                    <td colspan="23">

                                                        <ul class="pagination pull-right"></ul>
                                                    </td>
                                                    <td colspan="10">
                                                <p class="pull-right"><b>Total: <?php echo $totalamnt;?></b></p>
                                                </td>
                                                </tr>
                                                
                                            </tfoot>
                                            
                                        </table>
                                        </div>