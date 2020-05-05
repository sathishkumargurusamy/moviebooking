<link href="assets/plugins/footable-bootstrap/css/footable.core.min.css" rel="stylesheet" type="text/css"/>
<div class="table" id="table" style="font-size:20px; padding:6px;">
<table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter  >
                                            <thead>
                                                <tr style="border-bottom:2px solid;">
                                                
                                                <th style="border-right:2px solid;">Date</th>
                                                <th style="border-right:2px solid;">Timing&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                <th>Balcony</th>
                                                <th>Without tax</th>
                                                <th>8%</th>
                                                <th>MC</th>
                                                <th>18%</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                <th>First Class</th>
                                                <th>Without tax</th>
                                                <th>8%</th>
                                                <th>MC</th>
                                                <th>12%</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                <th>Second Class</th>
                                                <th>Without tax</th>
                                                <th>8%</th>
                                                <th>MC</th>
                                                <th>12%</th>
                                                <th style="border-right:2px solid;">With tax</th>
                                                <th>Total tickets Sold</th>
                                                <th>Total (without TAX)</th>
                                                <th>8%</th>
                                                <th>MC</th>
                                                <th>12% / 18%</th>
                                                    
                                                    <th>Total (with TAX)</th>
                                        
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
                                            $today=$_GET['d'];
                                            
                                           
                                            echo $today;
                                          $totalamnt=0;
     $result4=mysql_query("SELECT moviename FROM seat",$dbh1);
     while($row4 = mysql_fetch_array($result4)){
         $mname=$row4['moviename'];
        
     }
     
     $result5=mysql_query("SELECT layout FROM movie_tb where mname='$mname'",$dbh2);
     while($row5 = mysql_fetch_array($result5)){
        $lout=$row5['layout'];
       
        
    }
$result=mysql_query("SELECT * FROM rate WHERE date='$today'and timing='6 AM' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);


$result1=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 1:50 PM' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);

$result2=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 9:50 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);
$result3=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 6 PM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);
$result4=mysql_query("SELECT * FROM rate WHERE date='$today'and timing=' 10 AM ' ORDER BY afirst DESC,asecond DESC,abal DESC LIMIT 1",$dbh1);				   
$i=0;
while($row = mysql_fetch_array($result))
{

?>
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
                                                    <td style="border-right:2px solid;"><?php  echo $row['date'];?></td>
                                                    <td style="border-right:2px solid;"><?php echo $row['timing'];?></td>
                                                    <td><?php echo $row['abal'];?></td>
                                                    <td><?php echo $bm;?></td>
                                                    <td><?php echo $bme;?></td>
                                                    <td><?php echo $bmc;?></td>
                                                    <td><?php echo $btw;?></td>
                                                    <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                    <td><?php echo $row['afirst'];?></td>
                                                    <td><?php echo $fm;?></td>
                                                    <td><?php echo $fme;?></td>
                                                    <td><?php echo $fmc;?></td>
                                                    <td><?php echo $ftw;?></td>
                                                    <td style="border-right:2px solid;"><?php echo $ft2;?></td>
                                                    <td><?php echo $row['asecond'];?></td>
                                                    <td><?php echo $sm;?></td>
                                                    <td><?php echo $sme;?></td>
                                                    <td><?php echo $smc;?></td>
                                                    <td><?php echo $stw;?></td>
                                                    <td style="border-right:2px solid;"><?php echo $st2;?></td>
                                                    <td><?php echo $total;?></td>
                                                    <td><?php echo $twot;?></td>
                                                    <td><?php echo $te;?></td>
                                                    <td><?php echo $tmc;?></td>
                                                    <td><?php echo $ttw;?></td>
                                                    <td><?php echo $ttt;?></td>
                                                                                               
</tr>
                                               
                                                <?php $totalamnt=$totalamnt+$ttt; } ?>
                                                
                                               <?php while($row1 = mysql_fetch_array($result1))
{

?>
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
                                                   <td style="border-right:2px solid;"><?php echo $row1['date'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo $row1['timing'];?></td>
                                                   <td><?php echo $row1['abal'];?></td>
                                                   <td><?php echo $bm;?></td>
                                                   <td><?php echo $bme;?></td>
                                                   <td><?php echo $bmc;?></td>
                                                   <td><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   <td><?php echo $row1['afirst'];?></td>
                                                   <td><?php echo $fm;?></td>
                                                   <td><?php echo $fme;?></td>
                                                   <td><?php echo $fmc;?></td>
                                                   <td><?php echo $ftw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ft2;?></td>
                                                   <td><?php echo $row1['asecond'];?></td>
                                                   <td><?php echo $sm;?></td>
                                                   <td><?php echo $sme;?></td>
                                                   <td><?php echo $smc;?></td>
                                                   <td><?php echo $stw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $st2;?></td>
                                                   <td><?php echo $total;?></td>
                                                   <td><?php echo $twot;?></td>
                                                   <td><?php echo $te;?></td>
                                                   <td><?php echo $tmc;?></td>
                                                   <td><?php echo $ttw;?></td>
                                                   <td><?php echo $ttt;?></td>                                          
</tr>
                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
                                             <?php   while($row2 = mysql_fetch_array($result2))
{

?>
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
                                                   <td style="border-right:2px solid;"><?php echo $row2['date'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo $row2['timing'];?></td>
                                                   <td><?php echo $row2['abal'];?></td>
                                                   <td><?php echo $bm;?></td>
                                                   <td><?php echo $bme;?></td>
                                                   <td><?php echo $bmc;?></td>
                                                   <td><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   <td><?php echo $row2['afirst'];?></td>
                                                   <td><?php echo $fm;?></td>
                                                   <td><?php echo $fme;?></td>
                                                   <td><?php echo $fmc;?></td>
                                                   <td><?php echo $ftw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ft2;?></td>
                                                   <td><?php echo $row2['asecond'];?></td>
                                                   <td><?php echo $sm;?></td>
                                                   <td><?php echo $sme;?></td>
                                                   <td><?php echo $smc;?></td>
                                                   <td><?php echo $stw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $st2;?></td>
                                                   <td><?php echo $total;?></td>
                                                   <td><?php echo $twot;?></td>
                                                   <td><?php echo $te;?></td>
                                                   <td><?php echo $tmc;?></td>
                                                   <td><?php echo $ttw;?></td>
                                                   <td><?php echo $ttt;?></td>                                            
</tr>
                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
                                                <?php while($row3 = mysql_fetch_array($result3))
{

?>
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
                                                   <td style="border-right:2px solid;"><?php echo $row3['date'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo $row3['timing'];?></td>
                                                   <td><?php echo $row3['abal'];?></td>
                                                   <td><?php echo $bm;?></td>
                                                   <td><?php echo $bme;?></td>
                                                   <td><?php echo $bmc;?></td>
                                                   <td><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   <td><?php echo $row3['afirst'];?></td>
                                                   <td><?php echo $fm;?></td>
                                                   <td><?php echo $fme;?></td>
                                                   <td><?php echo $fmc;?></td>
                                                   <td><?php echo $ftw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ft2;?></td>
                                                   <td><?php echo $row3['asecond'];?></td>
                                                   <td><?php echo $sm;?></td>
                                                   <td><?php echo $sme;?></td>
                                                   <td><?php echo $smc;?></td>
                                                   <td><?php echo $stw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $st2;?></td>
                                                   
                                                   <td><?php echo $total;?></td>
                                                   <td><?php echo $twot;?></td>
                                                   <td><?php echo $te;?></td>
                                                   <td><?php echo $tmc;?></td>
                                                   <td><?php echo $ttw;?></td>
                                                   <td><?php echo $ttt;?></td>                                          
</tr>
                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
                                                <?php while($row4 = mysql_fetch_array($result4))
{

?>
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
                                                   <td style="border-right:2px solid;"><?php echo $row4['date'];?></td>
                                                   <td style="border-right:2px solid;"><?php echo $row4['timing'];?></td>
                                                   <td><?php echo $row4['abal'];?></td>
                                                   <td><?php echo $bm;?></td>
                                                   <td><?php echo $bme;?></td>
                                                   <td><?php echo $bmc;?></td>
                                                   <td><?php echo $btw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $bt2;?></td>
                                                   <td><?php echo $row4['afirst'];?></td>
                                                   <td><?php echo $fm;?></td>
                                                   <td><?php echo $fme;?></td>
                                                   <td><?php echo $fmc;?></td>
                                                   <td><?php echo $ftw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $ft2;?></td>
                                                   <td><?php echo $row4['asecond'];?></td>
                                                   <td><?php echo $sm;?></td>
                                                   <td><?php echo $sme;?></td>
                                                   <td><?php echo $smc;?></td>
                                                   <td><?php echo $stw;?></td>
                                                   <td style="border-right:2px solid;"><?php echo $st2;?></td>
                                                   
                                                   <td><?php echo $total;?></td>
                                                   <td><?php echo $twot;?></td>
                                                   <td><?php echo $te;?></td>
                                                   <td><?php echo $tmc;?></td>
                                                   <td><?php echo $ttw;?></td>
                                                   <td><?php echo $ttt;?></td>                                          
</tr>
                                               
                                                <?php $totalamnt=$totalamnt+$ttt;}?>
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