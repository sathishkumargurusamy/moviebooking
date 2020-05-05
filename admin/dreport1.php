<link href="assets/plugins/footable-bootstrap/css/footable.core.min.css" rel="stylesheet" type="text/css"/>
<b id="source-html">
<div class="table" id="page-content" style="font-size:16px; padding:6px;">

<table id="example1" style="border:1px solid black;background-color:#FFFFE0;" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter  >


<p align='center' style="font-size:20px;"><b><u><?php echo $_GET['d'];  ?></u></b></p>
                                           
                                            <?php
                                            include 'header.php';
                                            include 'config.php';
                                            include 'config1.php';
                                            $dbh2 = mysql_connect("localhost","root","",true); 
                                            $dbh1 = mysql_connect("localhost","root","",true);
                                            mysql_select_db("abirami_db", $dbh2);
                                            mysql_select_db("sample_db", $dbh1);
                                           
                                            $today=$_GET['d'];
                                            
                                           
                                            
                                          $totalamnt=0;
                                          $totalt=0;
                                          $totalwt=0.00;
                                          $totalf=0;
                                          $totals=0;
                                          $totalb=0;
                                          $totalwf=0;
                                          $totalws=0;
                                          $totalwb=0;

     $result4=mysql_query("SELECT moviename FROM seat",$dbh1);
     while($row4 = mysql_fetch_array($result4)){
         $mname=$row4['moviename'];
        
     }
     ?>
     <p align='center' style="font-size:20px;"><b><u><?php echo $mname; ?></u></b></p>
     <?php
     $result5=mysql_query("SELECT layout FROM movie_tb where mname='$mname'",$dbh2);
     while($row5 = mysql_fetch_array($result5)){
        $lout=$row5['layout'];
       
        
    }
    if($lout=='layout1')
    {
        $first=80.82;
        $first1=100;
        $second=64.29;
        $second1=80;
        $box=92.31;
        $box1=120;
    }
    else if($lout=='layout2')
    {
        $first=80.82;
        $second=80.82;
        $box=92.31;
        $first1=100;
        $second1=100;
        $box1=120;
    }
    else{
        $first=115.85;
        $second=115.85;
        $box=155.09;
        $first1=150;
        $second1=150;
        $box1=200;
    }
$result=mysql_query("SELECT * FROM rate WHERE date='$today'and timing='6 AM' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);


$result1=mysql_query("SELECT * FROM rate WHERE date='$today'and timing='10 AM' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);

$result2=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 1:50 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);
$result3=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 6 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);
$result4=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 9:50 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);				   
$i=0;
while($row = mysql_fetch_array($result))
{

?>

<thead>
<p align='center' style="font-size:20px;"><b><u><?php echo $row['timing'];  ?></u></b></p>
                                                <tr style="border-bottom:2px solid;">
                                                
                                                <th style="border-right:2px solid;">Class</th>
                                                <th style="border-right:2px solid;">Total Tickets Sold</th>
                                                <th style="border-right:2px solid;">Without tax</th>
                                                <th style="border-right:2px solid;">8%</th>
                                                <th style="border-right:2px solid;">MC</th>
                                                <th style="border-right:2px solid;">GST</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                
                                               
                                        
                                                </tr>
                                            </thead>
                                                <tr>
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
                                                $bm=$row['abal']*155.09;
                                                $fme=round(115.85*8/100,2)*$row['afirst'];
                                                $sme=round(115.85*8/100,2)*$row['asecond'];
                                                $bme=round(155.09*8/100,2)*$row['abal'];
                                                
                                                    $fmc=2.00*$row['afirst'];
                                                    $smc=2.00*$row['asecond'];
                                                    $bmc=2.00*$row['abal'];
                                                    $ft1=$fm+$fme+$fmc;
                                                    $st1=$sm+$sme+$smc;
                                                    $bt1=$bm+$bme+$bmc;
                                                    $ftw=round(127.12*18/100,2)*$row['afirst'];
                                                    $stw=round(127.12*18/100,2)*$row['asecond'];
                                                    $btw=round(169.49*18/100,2)*$row['abal'];
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
                                                    <td style="border-right:2px solid;">BALCONY <b>(<?php echo $box;  ?>)</b> </td>
                                                   <td style="border-right:2px solid;"><?php echo $row['abal'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$box,"X",$row['abal'],")   =</b></i>",$bm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bmc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   </tr>
                                                   
                                             <?php $totalwb=$totalwb+$bt2; if($lout=='layout3' || $lout=='layout2' ){ ?>

                                                   
                                                   <tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
                                                   <td style="border-right:2px solid;"><?php echo $row['afirst']+$row['asecond'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",($row['afirst']+$row['asecond']),")   =</b></i>",$fm+$sm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $fme+$sme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $fmc+$smc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ftw+$stw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ft2+$st2;?></td>
                                             <?php $totalwf=$totalwf+$ft2+$st2;} 
                                             else{?>
                                             <tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
                                                   <td style="border-right:2px solid;"><?php echo $row['afirst'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row['afirst'],")   =</b></i>",$fm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $fme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $fmc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ftw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ft2;?></td>
                                             <?php $totalwf=$totalwf+$ft2;} ?>
                                                   </tr>
                                                   <?php  if($lout=='layout1'){ ?>
                                                   <tr><td style="border-right:2px solid;">II CLASS <b>(<?php echo $second;  ?>)</b></td>
                                                   
                                                   <td style="border-right:2px solid;"><?php echo $row['asecond'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$second,"X",$row['asecond'],")   =</b></i>",$sm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $sme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $smc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $stw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $st2;?></td>
                                                   <?php $totalws=$totalws+$st2;}?>
                                                   </tr>
                                                   
                                                   
                                               
                                                <?php
                                                if($lout=='layout2' || $lout=='layout3')
                                                {
                                                    $totalf=$totalf+$row['afirst']+$row['asecond'];
                                                }
                                                else{
                                                    $totalf=$totalf+$row['afirst'];
                                                }
                                                $totals=$row['asecond']+$totals;
                                                $totalb=$row['abal']+$totalb;
                                                
                                                $totalwt=round($totalwt+$twot,2);
                                                $totalt=$totalt+$total; 
                                                
                                                $totalamnt=$totalamnt+$ttt; } ?>
                                                </table>
                                               <?php while($row1 = mysql_fetch_array($result1))
{

?>

<table id="example1" style="border:1px solid black;background-color:#FFFFE0;" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter  >
<thead>
<p align='center' style="font-size:20px;"><b><u><?php echo $row1['timing'];  ?></u></b> </p>
                                                <tr style="border-bottom:2px solid;">
                                                
                                                <th style="border-right:2px solid;">Class</th>
                                                <th style="border-right:2px solid;">Total Tickets Sold</th>
                                                <th style="border-right:2px solid;">Without tax</th>
                                                <th style="border-right:2px solid;">8%</th>
                                                <th style="border-right:2px solid;">MC</th>
                                                <th style="border-right:2px solid;">GST</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                
                                               
                                        
                                                </tr>
                                            </thead>
                                                <tr>
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
                                            $fm=$row1['afirst']*115.85;
                                            $sm=$row1['asecond']*115.85;
                                            $bm=$row1['abal']*155.09;
                                            $fme=round(115.85*8/100,2)*$row1['afirst'];
                                            $sme=round(115.85*8/100,2)*$row1['asecond'];
                                            $bme=round(155.09*8/100,2)*$row1['abal'];
                                           
                                                $fmc=2.00*$row1['afirst'];
                                                $smc=2.00*$row1['asecond'];
                                                $bmc=2.00*$row1['abal'];
                                                $ft1=$fm+$fme+$fmc;
                                                $st1=$sm+$sme+$smc;
                                                $bt1=$bm+$bme+$bmc;
                                                $ftw=round(127.12*18/100,2)*$row1['afirst'];
                                                $stw=round(127.12*18/100,2)*$row1['asecond'];
                                                $btw=round(169.49*18/100,2)*$row1['abal'];
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
                                                  <td style="border-right:2px solid;">BALCONY <b>(<?php echo $box;  ?>)</b> </td>
                                                   <td style="border-right:2px solid;"><?php echo $row1['abal'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$box,"X",$row1['abal'],")   =</b></i>",$bm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bmc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   
                                                   
                                                   
                                                   </tr>
                                                   <?php $totalwb=$totalwb+$bt2; if($lout=='layout3' || $lout=='layout2' ){ ?>

                                                   
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row1['afirst']+$row1['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row1['afirst']+$row1['asecond'],")   =</b></i>",$fm+$sm;?></td>
<td style="border-right:2px solid;"><?php echo $fme+$sme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc+$smc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw+$stw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2+$st2;?></td>
<?php $totalwf=$totalwf+$ft2+$st2; } 
else{?>
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row1['afirst'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row1['afirst'],")   =</b></i>",$fm;?></td>
<td style="border-right:2px solid;"><?php echo $fme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2;?></td>
<?php $totalwf=$totalwf+$ft2; } ?>
</tr>
<?php  if($lout=='layout1'){ ?>
<tr><td style="border-right:2px solid;">II CLASS <b>(<?php echo $second;  ?>)</b></td>

<td style="border-right:2px solid;"><?php echo $row1['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$second,"X",$row1['asecond'],")   =</b></i>",$sm;?></td>
<td style="border-right:2px solid;"><?php echo $sme;?></td>
<td style="border-right:2px solid;"><?php echo $smc;?></td>
<td style="border-right:2px solid;"><?php echo $stw;?></td>
<td style="border-right:2px solid;"><?php echo $st2;?></td>
<?php $totalws=$totalws+$st2; }?>
                                                   
                                                   </tr>
                                                   
                                                   
                                               
                                                <?php
                                                if($lout=='layout2' || $lout=='layout3')
                                                {
                                                    $totalf=$totalf+$row1['afirst']+$row1['asecond'];
                                                }
                                                else{
                                                    $totalf=$totalf+$row1['afirst'];
                                                }
                                                $totals=$row1['asecond']+$totals;
                                                $totalb=$row1['abal']+$totalb;
                                                $totalwt=round($totalwt+$twot,2);
                                                $totalt=$totalt+$total; 
                                                 $totalamnt=$totalamnt+$ttt;}?>
                                                </table>
                                             <?php   while($row2 = mysql_fetch_array($result2))
{

?>

<table id="example1" style="border:1px solid black;background-color:#FFFFE0;" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter  >
<thead>
<p align='center' style="font-size:20px;"><b><u><?php echo $row2['timing'];?></u></b></p>
                                                <tr style="border-bottom:2px solid;">
                                                
                                                <th style="border-right:2px solid;">Class</th>
                                                <th style="border-right:2px solid;">Total Tickets Sold</th>
                                                <th style="border-right:2px solid;">Without tax</th>
                                                <th style="border-right:2px solid;">8%</th>
                                                <th style="border-right:2px solid;">MC</th>
                                                <th style="border-right:2px solid;">GST</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                
                                               
                                        
                                                </tr>
                                            </thead>
                                                <tr>
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
                                            $fm=$row2['afirst']*115.85;
                                            $sm=$row2['asecond']*115.85;
                                            $bm=$row2['abal']*155.09;
                                            $fme=round(115.85*8/100,2)*$row2['afirst'];
                                            $sme=round(115.85*8/100,2)*$row2['asecond'];
                                            $bme=round(155.09*8/100,2)*$row2['abal'];
                                           
                                                $fmc=2.00*$row2['afirst'];
                                                $smc=2.00*$row2['asecond'];
                                                $bmc=2.00*$row2['abal'];
                                                $ft1=$fm+$fme+$fmc;
                                                $st1=$sm+$sme+$smc;
                                                $bt1=$bm+$bme+$bmc;
                                                $ftw=round(127.12*18/100,2)*$row2['afirst'];
                                                $stw=round(127.12*18/100,2)*$row2['asecond'];
                                                $btw=round(169.49*18/100,2)*$row2['abal'];
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
                                                   <td style="border-right:2px solid;">BALCONY <b>(<?php echo $box;  ?>)</b> </td>
                                                   <td style="border-right:2px solid;"><?php echo $row2['abal'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$box,"X",$row2['abal'],")   =</b></i>",$bm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bmc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   
                                                   
                                                   
                                                   </tr>
                                                   

                                                   

                                                   <?php $totalwb=$totalwb+$bt2; if($lout=='layout3' || $lout=='layout2' ){ ?>

                                                   
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row2['afirst']+$row2['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row2['afirst']+$row2['asecond'],")   =</b></i>",$fm+$sm;?></td>
<td style="border-right:2px solid;"><?php echo $fme+$sme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc+$smc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw+$stw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2+$st2;?></td>
<?php  $totalwf=$totalwf+$ft2+$st2; } 
else{?>
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row2['afirst'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row2['afirst'],")   =</b></i>",$fm;?></td>
<td style="border-right:2px solid;"><?php echo $fme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2;?></td>
<?php $totalwf=$totalwf+$ft2; } ?>
</tr>
<?php  if($lout=='layout1'){ ?>
<tr><td style="border-right:2px solid;">II CLASS <b>(<?php echo $second;  ?>)</b></td>

<td style="border-right:2px solid;"><?php echo $row2['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$second,"X",$row2['asecond'],")   =</b></i>",$sm;?></td>
<td style="border-right:2px solid;"><?php echo $sme;?></td>
<td style="border-right:2px solid;"><?php echo $smc;?></td>
<td style="border-right:2px solid;"><?php echo $stw;?></td>
<td style="border-right:2px solid;"><?php echo $st2;?></td>
<?php $totalws=$totalws+$st2; }?>

                                                   </tr>
                                                   
                                                   
                                               
                                                <?php
                                                if($lout=='layout2' || $lout=='layout3')
                                                {
                                                    $totalf=$totalf+$row2['afirst']+$row2['asecond'];
                                                }
                                                else{
                                                    $totalf=$totalf+$row2['afirst'];
                                                }
                                                $totals=$row2['asecond']+$totals;
                                                $totalb=$row2['abal']+$totalb;
                                                $totalwt=round($totalwt+$twot,2);
                                                $totalt=$totalt+$total; 
                                                $totalamnt=$totalamnt+$ttt;}?>
                                                </table>
                                                <?php while($row3 = mysql_fetch_array($result3))
{

?>
<p align='center' style="font-size:20px;"><b><u><?php echo $row3['timing']; ?></u></b></p>
<table id="example1" style="border:1px solid black;background-color:#FFFFE0;" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter  >
                                            <thead>
                                            <?php echo $row['timing']; ?>
                                                <tr style="border-bottom:2px solid;">
                                                
                                                <th style="border-right:2px solid;">Class</th>
                                                <th style="border-right:2px solid;">Total Tickets Sold</th>
                                                <th style="border-right:2px solid;">Without tax</th>
                                                <th style="border-right:2px solid;">8%</th>
                                                <th style="border-right:2px solid;">MC</th>
                                                <th style="border-right:2px solid;">GST</th>
                                                
                                                <th style="border-right:2px solid;">With tax</th>
                                                
                                               
                                        
                                                </tr>
                                            </thead>
                                                <tr>
                                               <?php
                                           $f=$row3['afirst'];
                                           $s=$row3['asecond'];
                                           $b=$row3['abal'];
                                           $total=$f+$s+$b;
                                           if($lout=="layout1")
                                           {
                                           $fm=$row3['afirst']*80.82;
                                           $sm=$row3['asecond']*64.29;
                                           $bm=$row3['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row3['afirst'];
                                           $sme=round(64.29*8/100,2)*$row3['asecond'];
                                           $bme=round(92.31*8/100,2)*$row3['abal'];
                                               $fmc=2.00*$row3['afirst'];
                                               $smc=2.00*$row3['asecond'];
                                               $bmc=2.00*$row3['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row3['afirst'];
                                               $stw=round(71.43*12/100,2)*$row3['asecond'];
                                               $btw=round(101.69*18/100,2)*$row3['abal'];
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
                                           $fm=$row3['afirst']*80.82;
                                           $sm=$row3['asecond']*80.82;
                                           $bm=$row3['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row3['afirst'];
                                           $sme=round(80.82*8/100,2)*$row3['asecond'];
                                           $bme=round(92.31*8/100,2)*$row3['abal'];
                                               $fmc=2.00*$row3['afirst'];
                                               $smc=2.00*$row3['asecond'];
                                               $bmc=2.00*$row3['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row3['afirst'];
                                               $stw=round(89.29*12/100,2)*$row3['asecond'];
                                               $btw=round(101.69*18/100,2)*$row3['abal'];
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
                                           $fm=$row3['afirst']*115.85;
                                           $sm=$row3['asecond']*115.85;
                                           $bm=$row3['abal']*200;
                                           $fme=round(115.85*8/100,2)*$row3['afirst'];
                                           $sme=round(115.85*8/100,2)*$row3['asecond'];
                                           $bme=round(92.31*0/100,2)*$row3['abal'];
                                               $fmc=2.00*$row3['afirst'];
                                               $smc=2.00*$row3['asecond'];
                                               $bmc=0*$row3['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(127.12*18/100,2)*$row3['afirst'];
                                               $stw=round(127.12*18/100,2)*$row3['asecond'];
                                               $btw=round(101.69*0/100,2)*$row3['abal'];
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
                                                   <td style="border-right:2px solid;">BALCONY <b>(<?php echo $box;  ?>)</b> </td>
                                                   <td style="border-right:2px solid;"><?php echo $row3['abal'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$box,"X",$row3['abal'],")   =</b></i>",$bm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bmc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   
                                                   
                                                   
                                                   </tr>
                                                   <?php  if($lout=='layout3' || $lout=='layout2' ){ ?>

                                                   
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row3['afirst']+$row3['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row3['afirst']+$row3['asecond'],")   =</b></i>",$fm+$sm;?></td>
<td style="border-right:2px solid;"><?php echo $fme+$sme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc+$smc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw+$stw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2+$st2;?></td>
<?php } 
else{?>
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row3['afirst'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row3['afirst'],")   =</b></i>",$fm;?></td>
<td style="border-right:2px solid;"><?php echo $fme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2;?></td>
<?php } ?>
</tr>
<?php  if($lout=='layout1'){ ?>
<tr><td style="border-right:2px solid;">II CLASS <b>(<?php echo $second;  ?>)</b></td>

<td style="border-right:2px solid;"><?php echo $row3['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$second,"X",$row3['asecond'],")   =</b></i>",$sm;?></td>
<td style="border-right:2px solid;"><?php echo $sme;?></td>
<td style="border-right:2px solid;"><?php echo $smc;?></td>
<td style="border-right:2px solid;"><?php echo $stw;?></td>
<td style="border-right:2px solid;"><?php echo $st2;?></td>
<?php }?>
                                                   
                                                   </tr>
                                                   
                                                   
                                               
                                                <?php
                                                if($lout=='layout2' || $lout=='layout3')
                                                {
                                                    $totalf=$totalf+$row3['afirst']+$row3['asecond'];
                                                }
                                                else{
                                                    $totalf=$totalf+$row3['afirst'];
                                                }
                                                $totals=$row3['asecond']+$totals;
                                                $totalb=$row3['abal']+$totalb;
                                                $totalwt=round($totalwt+$twot,2);
                                                $totalt=$totalt+$total; 
                                                $totalamnt=$totalamnt+$ttt;}?>
                                                </table>
                                                <?php while($row4 = mysql_fetch_array($result4))
{

?>
<p align='center' style="font-size:20px;"><b><u><?php echo $row4['timing']; ?></u></b></p>
<table id="example1" style="border:1px solid black;background-color:#FFFFE0;" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter  >

                                            <thead>
                                                <tr style="border-bottom:2px solid;">
                                                
                                                <th style="border-right:2px solid;">Class</th>
                                                <th style="border-right:2px solid;">Total Tickets Sold</th>
                                                <th style="border-right:2px solid;">Without tax</th>
                                                <th style="border-right:2px solid;">8%</th>
                                                <th style="border-right:2px solid;">MC</th>
                                                <th style="border-right:2px solid;">GST</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                
                                               
                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                               <?php
                                           $f=$row4['afirst'];
                                           $s=$row4['asecond'];
                                           $b=$row4['abal'];
                                           $total=$f+$s+$b;
                                           if($lout=="layout1")
                                           {
                                           $fm=$row4['afirst']*80.82;
                                           $sm=$row4['asecond']*64.29;
                                           $bm=$row4['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row4['afirst'];
                                           $sme=round(64.29*8/100,2)*$row4['asecond'];
                                           $bme=round(92.31*8/100,2)*$row4['abal'];
                                               $fmc=2.00*$row4['afirst'];
                                               $smc=2.00*$row4['asecond'];
                                               $bmc=2.00*$row4['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row4['afirst'];
                                               $stw=round(71.43*12/100,2)*$row4['asecond'];
                                               $btw=round(101.69*18/100,2)*$row4['abal'];
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
                                           $fm=$row4['afirst']*80.82;
                                           $sm=$row4['asecond']*80.82;
                                           $bm=$row4['abal']*92.31;
                                           $fme=round(80.82*8/100,2)*$row4['afirst'];
                                           $sme=round(80.82*8/100,2)*$row4['asecond'];
                                           $bme=round(92.31*8/100,2)*$row4['abal'];
                                               $fmc=2.00*$row4['afirst'];
                                               $smc=2.00*$row4['asecond'];
                                               $bmc=2.00*$row4['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(89.29*12/100,2)*$row4['afirst'];
                                               $stw=round(89.29*12/100,2)*$row4['asecond'];
                                               $btw=round(101.69*18/100,2)*$row4['abal'];
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
                                           $fm=$row4['afirst']*115.85;
                                           $sm=$row4['asecond']*115.85;
                                           $bm=$row4['abal']*155.09;
                                           $fme=round(115.85*8/100,2)*$row4['afirst'];
                                           $sme=round(115.85*8/100,2)*$row4['asecond'];
                                           $bme=round(155.09*8/100,2)*$row4['abal'];
                                               $fmc=2.00*$row4['afirst'];
                                               $smc=2.00*$row4['asecond'];
                                               $bmc=2.00*$row4['abal'];
                                               $ft1=$fm+$fme+$fmc;
                                               $st1=$sm+$sme+$smc;
                                               $bt1=$bm+$bme+$bmc;
                                               $ftw=round(127.12*18/100,2)*$row4['afirst'];
                                               $stw=round(127.12*18/100,2)*$row4['asecond'];
                                               $btw=round(169.49*18/100,2)*$row4['abal'];
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
                                                   <td style="border-right:2px solid;">BALCONY <b>(<?php echo $box;  ?>)</b> </td>
                                                   <td style="border-right:2px solid;"><?php echo $row4['abal'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$box,"X",$row4['abal'],")   =</b></i>",$bm;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bme;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bmc;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   
                                                   
                                                   
                                                   </tr>
                                                   <?php $totalwb=$totalwb+$bt2;  if($lout=='layout3' || $lout=='layout2' ){ ?>

                                                   
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row4['afirst']+$row4['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row4['afirst']+$row4['asecond'],")   =</b></i>",$fm+$sm;?></td>
<td style="border-right:2px solid;"><?php echo $fme+$sme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc+$smc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw+$stw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2+$st2;?></td>
<?php $totalwf=$totalwf+$ft2+$st2; } 
else{?>
<tr><td style="border-right:2px solid;">I CLASS <b>(<?php echo $first;  ?>)</b></td>
<td style="border-right:2px solid;"><?php echo $row4['afirst'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$first,"X",$row4['afirst'],")   =</b></i>",$fm;?></td>
<td style="border-right:2px solid;"><?php echo $fme;?></td>
<td style="border-right:2px solid;"><?php echo $fmc;?></td>
<td style="border-right:2px solid;"><?php echo $ftw;?></td>
<td style="border-right:2px solid;"><?php echo $ft2;?></td>
<?php $totalwf=$totalwf+$ft2; } ?>
</tr>
<?php  if($lout=='layout1'){ ?>
<tr><td style="border-right:2px solid;">II CLASS <b>(<?php echo $second;  ?>)</b></td>

<td style="border-right:2px solid;"><?php echo $row4['asecond'];?></td>
<td style="border-right:2px solid;"><?php echo "<i style='font-size:14px;'><b>(",$second,"X",$row4['asecond'],")   =</b></i>",$sm;?></td>
<td style="border-right:2px solid;"><?php echo $sme;?></td>
<td style="border-right:2px solid;"><?php echo $smc;?></td>
<td style="border-right:2px solid;"><?php echo $stw;?></td>
<td style="border-right:2px solid;"><?php echo $st2;?></td>
<?php $totalws=$totalws+$st2; }?>
                                                   
                                                   </tr>
                                                   
                                                   
                                               
                                                <?php
                                                if($lout=='layout2' || $lout=='layout3')
                                                {
                                                    $totalf=$totalf+$row4['afirst']+$row4['asecond'];
                                                }
                                                else{
                                                    $totalf=$totalf+$row4['afirst'];
                                                }
                                                $totals=$row4['asecond']+$totals;
                                                $totalb=$row4['abal']+$totalb;
                                                $totalwt=round($totalwt+$twot,2);
                                                $totalt=$totalt+$total; 
                                                $totalamnt=$totalamnt+$ttt;}?>
                                            </tbody >
                                            </table>
                                           
                                        
                                       
                                                    <div style="float:left;background-color:#f7b7c2;"><p style="background-color:#f7b7c2; font-size:18px;" ><b><div style="float:left;width:240px;">BOX:(Tickets) <?php echo $totalb;?></div><div style="float:left;width:300px;">NET: <?php echo "<i style='font-size:14px;'><b>(",$box,"X",$totalb,")=  </b></i>", $box*$totalb;?></div><div style="float:left;width:300px;">With Tax: <?php echo $box1*$totalb;?></div></b></p></div> 
                                                
                                                
                                               


                                                    
                                                
                                                    <div style="float:left;background-color:#f7b7c2;width:auto;border-bottom:2px solid black;"><p style="background-color:#f7b7c2; font-size:18px;" ><b><div style="float:left;width:240px;">I CLASS(Tickets:)<?php echo $totalf;?></div><div style="float:left;width:300px;">NET: <?php echo "<i style='font-size:14px;'><b>(",$first,"X",$totalf,")=  </b></i>", $first*$totalf;?></div><div style="float:left;width:300px;">With Tax: <?php echo $first1*$totalf;?></div></b></p> </div>
                                           
                                                
                                        
                                                <?php
                                                if($lout=="layout1"){
                                                ?>
                                               



                                                    
                                                    
                                                    <div style="float:left;background-color:#f7b7c2;width:auto;border-bottom:2px solid black;"> <p style="background-color:#f7b7c2; font-size:18px;" ><b><div style="float:left;width:240px;">II CLASS <?php echo $totals;?></div><div style="float:left;width:300px;">Rate: <?php echo "<i style='font-size:14px;'><b>(",$second,"X",$totals,")=  </b></i>", $second*$totals;?></div><div style="float:left;width:300px;">NET: <?php echo $second*$totals;?></div><div style="float:left;width:300px;">With Tax: <?php echo $second1*$totals;?></div></b></p></div> 
                                                
                                                 <?php  }?>
                                        



                                                    
                                                    
                                                    <div style="float:left;background-color:#c8f7d2;width:auto; border-bottom:2px solid black;"><p style="background-color:#c8f7d2; font-size:18px;" ><b><div style="float:left;width:240px;">Total Tickets: <?php echo $totalt;?></div><div style="float:left;width:300px;">Total NET: <?php echo $totalwt;?></div><div style="float:left;width:300px;">Total with Tax: <?php echo $totalamnt;?></div></b></p></div>
                                               

                                                
                                               
                                                
                                            
                                        </div></b>
                                    