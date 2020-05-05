
<?php
$list=array('f','b','s');
foreach($list as $k)
    {
for($i='a';$i<='z';$i++)
    {	
for($j=1;$j<15;$j++){
    $j1=str_pad($j, 3, 'RR', STR_PAD_LEFT);
            					   
${$k.$i.$j1}="";
${$k.$i.$j}="";

}
    }
}
?>

<style>
.banner{
    width:100%;
    height:auto;
    display:flex;
    font-size:24px;
    margin-bottom:10px;
    justify-content:center;
    background-color:yellow;
}
</style>
<link rel="stylesheet" type="text/css" href="home1.css" media="screen" />
    
    <?php 

$time1=$_GET['q'];
$date1=$_GET['d'];
include("config.php");
$result=mysql_query("SELECT sno FROM seat where timing='$time1' and `date`='$date1'");

while($row = mysql_fetch_array($result)){
    
    $val= $row['sno'];
    list($part1,$part2,$part3)=explode("-",$val);
    if($part1==="f" || $part1==="s" || $part1==="t" || $part1==="b" ){
        
foreach(range('a','z') as $i)
    {
        
        for($j=1;$j<15;$j++)
        { 
            
            $j1=str_pad($j, 3, 'RR', STR_PAD_LEFT);
        
    $val1=array($part1,$i,$j1);
    $val2=array($part1,$i,$j);
    $array2=implode("-",$val1);
  
    $array1=implode("-",$val2);
   
    if($array2===$row['sno'] )
    {
       
        list($part1,$part2,$part3)=explode("-",$array2);
        ${$part1.$part2.$part3}="disabled";
    }
    if($array1===$row['sno']){
    
        list($part11,$part21,$part31)=explode("-",$array1);
       
        ${$part11.$part21.$part31}="disabled";
       
    }
}

}
    }

    }?>
    <?php
    include("config1.php");
    $result=mysql_query("SELECT mname FROM movie_tb");
    while($row12=mysql_fetch_array($result)){ 
        $mname=$row12['mname']; 
    }
        $show=mysql_query("SELECT layout from movie_tb WHERE mname = '$mname'");
        while($row123=mysql_fetch_array($show)){ 
            $GLOBALS['sw']=$row123['layout'];
        
     }
    ?>
    
<br><br><br><br><br><br><br>
</div>

    <div style="margin-left:500px;"> 
    <input type="text" name="shows" id="shows" value='<?php echo $time1?>' hidden/>
    <h4 align="center" style="margin-right:500px;font-family: 'Anton', sans-serif; background-color:lightyellow">Show Timing  - <?php if($time1=="undefined"){echo "----";} else echo $time1;?></h4>
    
 </div>
    <div class="btn-group" >
			
			<div class="btn btn-block unsubmitted">
  <div class="container">
  <div id="bal"  style="display:none;">
  <div class='banner'>
BOX  </div> 
           
            <div class="row" >
            <div class="col-md-3 col-sm-3 col-lg-3"></div>
            <div class="col-md-3 col-sm-3 col-lg-3">
           
            <label class="chck"><input name="balcony[]" type="checkbox" class="input_class_checkbox3" value="b-a-1" autocomplete="off"<?php echo $ba1; ?> > <span class="checkmark"></span></label>
            <label class="chck"><input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-b-1"  <?php echo $bb1; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="balcony[]" type="checkbox" class="input_class_checkbox3"id="checkbox" autocomplete="off" value="b-c-1"<?php echo $bc1; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-d-1"<?php echo $bd1; ?>><span class="checkmark"></span></label>
                   </div>
                  
                   
                   <div class="col-md-3 col-sm-3 col-lg-3"style="margin-left:70px;">
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-e-1"<?php echo $be1; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-f-1"<?php echo $bf1; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-g-1"<?php echo $bg1; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-h-1"<?php echo $bh1; ?>><span class="checkmark"></span></label>
                        
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3"></div>
                </div>
                <div class="row">
                <div class="col-md-3 col-sm-3 col-lg-3"></div>
            <div class="col-md-3 col-sm-3 col-lg-3">
              
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" value="b-a-2" autocomplete="off"<?php echo $ba2; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-b-2"  <?php echo $bb2; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="balcony[]" type="checkbox" class="input_class_checkbox3"id="checkbox" autocomplete="off" value="b-c-2"<?php echo $bc2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-d-2"<?php echo $bd2; ?>><span class="checkmark"></span></label>
                   </div>
                  
                   <div class="col-md-3 col-sm-3 col-lg-3"style="margin-left:70px;">
                   <label class="chck">  <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-e-2"<?php echo $be2; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-f-2"<?php echo $bf2; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-g-2"<?php echo $bg2; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-h-2"<?php echo $bh2; ?>><span class="checkmark"></span></label>
                        
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3"></div>
                </div>
                <div class="row">
                <div class="col-md-3 col-sm-3 col-lg-3"></div>
            <div class="col-md-3 col-sm-3 col-lg-3" >
              
              
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" value="b-a-3" autocomplete="off"<?php echo $ba3; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-b-3"  <?php echo $bb3; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="balcony[]" type="checkbox" class="input_class_checkbox3"id="checkbox" autocomplete="off" value="b-c-3"<?php echo $bc3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-d-3"<?php echo $bd3; ?>><span class="checkmark"></span></label>
                <label class="chck"> </div>
                <div class="col-md-3 col-sm-3 col-lg-3"style="margin-left:70px;">
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-e-3"<?php echo $be3; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-f-3"<?php echo $bf3; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-g-3"<?php echo $bg3; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-h-3"<?php echo $bh3; ?>><span class="checkmark"></span></label>
                        
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3"></div>
                </div>
                
                <div class="row">
                <div class="col-md-3 col-sm-3 col-lg-3"></div>
            <div class="col-md-3 col-sm-3 col-lg-3" >
              
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" value="b-a-4" autocomplete="off"<?php echo $ba4; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-b-4"  <?php echo $bb4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3"id="checkbox" autocomplete="off" value="b-c-4"<?php echo $bc4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-d-4"<?php echo $bd4; ?>><span class="checkmark"></span></label>
                   
                <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-e-4"<?php echo $be4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-f-4"<?php echo $bf4; ?>><span class="checkmark"></span></label>
                   </div>
                   <div class="col-md-3 col-sm-3 col-lg-3"style="margin-left:10px;" >
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-g-4"<?php echo $bg4; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-h-4"<?php echo $bh4; ?>><span class="checkmark"></span></label>
        
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-i-4"<?php echo $bi4; ?>><span class="checkmark"></span></label>
                   <label class="chck">  <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-j-4"<?php echo $bj4; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-k-4"<?php echo $bk4; ?>><span class="checkmark"></span></label>
                   <label class="chck"> <input name="balcony[]" type="checkbox" class="input_class_checkbox3" autocomplete="off" value="b-l-4"<?php echo $bl4; ?>><span class="checkmark"></span></label>
                        
                        </div>


                        <div class="col-md-3 col-sm-3 col-lg-3"></div>
                </div>
                </div>
                <div  id="fc"  style="display:block;">
  <!-- <h5><b style="color:#4a1380;">---------------------------------------------------------------------------------------  FIRST CLASS  --------------------------------------------------------------------------------------------------</b></h5> -->
  <div class='banner'>
  FIRST CLASS
  </div>          
            <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-1" autocomplete="off"<?php echo $fa1; ?> ><span class="checkmark"></span></label>
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-1"  <?php echo $fb1; ?>><span class="checkmark"></span></label>
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-1"<?php echo $fc1; ?>><span class="checkmark"></span></label>
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-1"<?php echo $fd1; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-1"<?php echo $fe1; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-1"<?php echo $ff1; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-1"<?php echo $fg1; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-1"<?php echo $fh1; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-1"<?php echo $fi1; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-1" autocomplete="off"<?php echo $fj1; ?> ><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-1"  <?php echo $fk1; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-1"<?php echo $fl1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-1"<?php echo $fm1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-1"<?php echo $fn1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-1"<?php echo $fo1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-1"<?php echo $fp1; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-1"<?php echo $fq1; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-1"<?php echo $fr1; ?>><span class="checkmark"></span></label>
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-1" autocomplete="off"<?php echo $fs1; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-1"  <?php echo $ft1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-1"<?php echo $fu1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-1"<?php echo $fv1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-1"<?php echo $fw1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-1"<?php echo $fx1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-1"<?php echo $fy1; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-1"<?php echo $fz1; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR1"<?php echo $faRR1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-RR1"<?php echo $fbRR1; ?>><span class="checkmark"></span></label>
                </div>
                </div>
                <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-2" autocomplete="off"<?php echo $fa2; ?> ><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-2"  <?php echo $fb2; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-2"<?php echo $fc2; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-2"<?php echo $fd2; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-2"<?php echo $fe2; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-2"<?php echo $ff2; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-2"<?php echo $fg2; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-2"<?php echo $fh2; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-2"<?php echo $fi2; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-2" autocomplete="off"<?php echo $fj2; ?> ><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-2"  <?php echo $fk2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-2"<?php echo $fl2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-2"<?php echo $fm2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-2"<?php echo $fn2; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-2"<?php echo $fo2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-2"<?php echo $fp2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-2"<?php echo $fq2; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-2"<?php echo $fr2; ?>><span class="checkmark"></span></label>
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-2" autocomplete="off"<?php echo $fs2; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-2"  <?php echo $ft2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-2"<?php echo $fu2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-2"<?php echo $fv2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-2"<?php echo $fw2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-2"<?php echo $fx2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-2"<?php echo $fy2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-2"<?php echo $fz2; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR2"<?php echo $faRR2; ?>><span class="checkmark"></span></label>
                        
                </div>
                </div>
                <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-3" autocomplete="off"<?php echo $fa3; ?> ><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-3"  <?php echo $fb3; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-3"<?php echo $fc3; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-3"<?php echo $fd3; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-3"<?php echo $fe3; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-3"<?php echo $ff3; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-3"<?php echo $fg3; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-3"<?php echo $fh3; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-3"<?php echo $fi3; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-3" autocomplete="off"<?php echo $fj3; ?> ><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-3"  <?php echo $fk3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-3"<?php echo $fl3; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-3"<?php echo $fm3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-3"<?php echo $fn3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-3"<?php echo $fo3; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-3"<?php echo $fp3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-3"<?php echo $fq3; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-3"<?php echo $fr3; ?>><span class="checkmark"></span></label>
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-3" autocomplete="off"<?php echo $fs3; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-3"  <?php echo $ft3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-3"<?php echo $fu3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-3"<?php echo $fv3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-3"<?php echo $fw3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-3"<?php echo $fx3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-3"<?php echo $fy3; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-3"<?php echo $fz3; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR3"<?php echo $faRR3; ?>><span class="checkmark"></span></label>
                        
                </div>
                </div>
                <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-4" autocomplete="off"<?php echo $fa4; ?> ><span class="checkmark"></span></label>
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-4"  <?php echo $fb4; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-4"<?php echo $fc4; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-4"<?php echo $fd4; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-4"<?php echo $fe4; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-4"<?php echo $ff4; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-4"<?php echo $fg4; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-4"<?php echo $fh4; ?>><span class="checkmark"></span></label>
            <label class="chck">     <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-4"<?php echo $fi4; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-4" autocomplete="off"<?php echo $fj4; ?> ><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-4"  <?php echo $fk4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-4"<?php echo $fl4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-4"<?php echo $fm4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-4"<?php echo $fn4; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-4"<?php echo $fo4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-4"<?php echo $fp4; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-4"<?php echo $fq4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-4"<?php echo $fr4; ?>><span class="checkmark"></span></label>
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-4" autocomplete="off"<?php echo $fs4; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-4"  <?php echo $ft4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-4"<?php echo $fu4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-4"<?php echo $fv4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-4"<?php echo $fw4; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-4"<?php echo $fx4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-4"<?php echo $fy4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-4"<?php echo $fz4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR4"<?php echo $faRR4; ?>><span class="checkmark"></span></label>
                        
                </div>
                </div>
                <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-5" autocomplete="off"<?php echo $fa5; ?> ><span class="checkmark"></span></label>
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-5"  <?php echo $fb5; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-5"<?php echo $fc5; ?>><span class="checkmark"></span></label>
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-5"<?php echo $fd5; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-5"<?php echo $fe5; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-5"<?php echo $ff5; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-5"<?php echo $fg5; ?>><span class="checkmark"></span></label>
            <label class="chck">     <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-5"<?php echo $fh5; ?>><span class="checkmark"></span></label>
                       
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-5"<?php echo $fi5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-5" autocomplete="off"<?php echo $fj5; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-5"  <?php echo $fk5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-5"<?php echo $fl5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-5"<?php echo $fm5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-5"<?php echo $fn5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-5"<?php echo $fo5; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-5"<?php echo $fp5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-5"<?php echo $fq5; ?>><span class="checkmark"></span></label>
                       
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-5"<?php echo $fr5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-5" autocomplete="off"<?php echo $fs5; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-5"  <?php echo $ft5; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-5"<?php echo $fu5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-5"<?php echo $fv5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-5"<?php echo $fw5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-5"<?php echo $fx5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-5"<?php echo $fy5; ?>><span class="checkmark"></span></label>
                       
                        
                        
                </div>
                </div>
                <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-6" autocomplete="off"<?php echo $fa6; ?> ><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-6"  <?php echo $fb6; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-6"<?php echo $fc6; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-6"<?php echo $fd6; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-6"<?php echo $fe6; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-6"<?php echo $ff6; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-6"<?php echo $fg6; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-6"<?php echo $fh6; ?>><span class="checkmark"></span></label>
                       
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                
                       
                        
                </div>
                  <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-6"<?php echo $fi6; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-6" autocomplete="off"<?php echo $fj6; ?> ><span class="checkmark"></span></label>
              <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-6"  <?php echo $fk6; ?>><span class="checkmark"></span></label>
              <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-6"<?php echo $fl6; ?>><span class="checkmark"></span></label>
              <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-6"<?php echo $fm6; ?>><span class="checkmark"></span></label>
              <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-6"<?php echo $fn6; ?>><span class="checkmark"></span></label>
              <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-6"<?php echo $fo6; ?>><span class="checkmark"></span></label>
              <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-6"<?php echo $fp6; ?>><span class="checkmark"></span></label>
                       
                       
                        
                        
                </div>
                </div>

               
                <div class="row" style="border-top:0.5px black solid;">
            <div class="col-md-4 col-sm-4 col-lg-4">
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-7" autocomplete="off"<?php echo $fa7; ?> ><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-7"  <?php echo $fb7; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-7"<?php echo $fc7; ?>><span class="checkmark"></span></label>
            <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-7"<?php echo $fd7; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-7"<?php echo $fe7; ?>><span class="checkmark"></span></label>
            <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-7"<?php echo $ff7; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-7"<?php echo $fg7; ?>><span class="checkmark"></span></label>
            <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-7"<?php echo $fh7; ?>><span class="checkmark"></span></label>
            <label class="chck">     <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-7"<?php echo $fi7; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4" >
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-7" autocomplete="off"<?php echo $fj7; ?> ><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-7"  <?php echo $fk7; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-7"<?php echo $fl7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-7"<?php echo $fm7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-7"<?php echo $fn7; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-7"<?php echo $fo7; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-7"<?php echo $fp7; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-7"<?php echo $fq7; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-7"<?php echo $fr7; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-7" autocomplete="off"<?php echo $fs7; ?> ><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-7"  <?php echo $ft7; ?>><span class="checkmark"></span></label>
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4" >
                
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-7"<?php echo $fu7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-7"<?php echo $fv7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-7"<?php echo $fw7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-7"<?php echo $fx7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-7"<?php echo $fy7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-7"<?php echo $fz7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR7"<?php echo $faRR7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-RR7"<?php echo $fbRR7; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-c-RR7"<?php echo $fcRR7; ?>><span class="checkmark"></span></label>
                        
                </div>
                </div>
                <div class="row" >
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-8" autocomplete="off"<?php echo $fa8; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-8"  <?php echo $fb8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-8"<?php echo $fc8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-8"<?php echo $fd8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-8"<?php echo $fe8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-8"<?php echo $ff8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-8"<?php echo $fg8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-8"<?php echo $fh8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-8"<?php echo $fi8; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-8" autocomplete="off"<?php echo $fj8; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-8"  <?php echo $fk8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-8"<?php echo $fl8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-8"<?php echo $fm8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-8"<?php echo $fn8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-8"<?php echo $fo8; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-8"<?php echo $fp8; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-8"<?php echo $fq8; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-8"<?php echo $fr8; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-8" autocomplete="off"<?php echo $fs8; ?> ><span class="checkmark"></span></label>
               
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-8"  <?php echo $ft8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-8"<?php echo $fu8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-8"<?php echo $fv8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-8"<?php echo $fw8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-8"<?php echo $fx8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-8"<?php echo $fy8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-8"<?php echo $fz8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR8"<?php echo $faRR8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-RR8"<?php echo $fbRR8; ?>><span class="checkmark"></span></label>
                        
                        
                </div>
                </div>
                <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-9" autocomplete="off"<?php echo $fa9; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-9"  <?php echo $fb9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-9"<?php echo $fc9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-9"<?php echo $fd9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-9"<?php echo $fe9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-9"<?php echo $ff9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-9"<?php echo $fg9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-9"<?php echo $fh9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-9"<?php echo $fi9; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-9" autocomplete="off"<?php echo $fj9; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-9"  <?php echo $fk9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-9"<?php echo $fl9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-9"<?php echo $fm9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-9"<?php echo $fn9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-9"<?php echo $fo9; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-9"<?php echo $fp9; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-9"<?php echo $fq9; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-9"<?php echo $fr9; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-9" autocomplete="off"<?php echo $fs9; ?> ><span class="checkmark"></span></label>
               
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-9"  <?php echo $ft9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-9"<?php echo $fu9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-9"<?php echo $fv9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-9"<?php echo $fw9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-9"<?php echo $fx9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-9"<?php echo $fy9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-9"<?php echo $fz9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-a-RR9"<?php echo $faRR9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-RR9"<?php echo $fbRR9; ?>><span class="checkmark"></span></label>
                        
                        
                </div>
                </div>
                <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-10" autocomplete="off"<?php echo $fa10; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-10"  <?php echo $fb10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-10"<?php echo $fc10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-10"<?php echo $fd10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-10"<?php echo $fe10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-10"<?php echo $ff10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-10"<?php echo $fg10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-10"<?php echo $fh10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-10"<?php echo $fi10; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-10" autocomplete="off"<?php echo $fj10; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-10"  <?php echo $fk10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-10"<?php echo $fl10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-10"<?php echo $fm10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-10"<?php echo $fn10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-10"<?php echo $fo10; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-10"<?php echo $fp10; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-10"<?php echo $fq10; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-10"<?php echo $fr10; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-10" autocomplete="off"<?php echo $fs10; ?> ><span class="checkmark"></span></label>
               
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-10"  <?php echo $ft10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-10"<?php echo $fu10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-10"<?php echo $fv10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-10"<?php echo $fw10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-10"<?php echo $fx10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-10"<?php echo $fy10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-10"<?php echo $fz10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-RR1"<?php echo $fgRR1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-RR1"<?php echo $fhRR1; ?>><span class="checkmark"></span></label>
                        
                        
                </div>
                </div>
                <div class="row" >
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-a-11" autocomplete="off"<?php echo $fa11; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-b-11"  <?php echo $fb11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-c-11"<?php echo $fc11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-d-11"<?php echo $fd11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-e-11"<?php echo $fe11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-f-11"<?php echo $ff11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-11"<?php echo $fg11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-11"<?php echo $fh11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-i-11"<?php echo $fi11; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" value="f-j-11" autocomplete="off"<?php echo $fj11; ?> ><span class="checkmark"></span></label>
                <label class="chck"><input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-k-11"  <?php echo $fk11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-l-11"<?php echo $fl11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-m-11"<?php echo $fm11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-n-11"<?php echo $fn11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-o-11"<?php echo $fo11; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-p-11"<?php echo $fp11; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-q-11"<?php echo $fq11; ?>><span class="checkmark"></span></label>
                <label class="chck">    <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-r-11"<?php echo $fr11; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="first[]" type="checkbox" class="input_class_checkbox" value="f-s-11" autocomplete="off"<?php echo $fs11; ?> ><span class="checkmark"></span></label>
               
                        
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-t-11"  <?php echo $ft11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox"id="checkbox" autocomplete="off" value="f-u-11"<?php echo $fu11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-v-11"<?php echo $fv11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-w-11"<?php echo $fw11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-x-11"<?php echo $fx11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-y-11"<?php echo $fy11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-z-11"<?php echo $fz11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-g-RR2"<?php echo $fgRR2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="first[]" type="checkbox" class="input_class_checkbox" autocomplete="off" value="f-h-RR2"<?php echo $fhRR2; ?>><span class="checkmark"></span></label>
                        
                        
                </div>
                </div>
                </div>
                <div id="sc"  style="display:none;">
                <!-- <h5><b style="color:#4a1380;">--------------------------------------------------------------------------------------- <?php if($sw=="layout2" || $sw=="layout3"){echo "FIRST CLASS"; } else { echo "SECOND CLASS"; } ?>  --------------------------------------------------------------------------------------------------</b></h5> -->
                <div class='banner'>
BOX  </div> 
                
                <div class="row" >
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-1"<?php echo $sa1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-1"<?php echo $sb1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-1"<?php echo $sc1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-1"<?php echo $sd1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-1"<?php echo $se1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-1"<?php echo $sf1; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-1"<?php echo $sg1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-1"<?php echo $sh1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-1"<?php echo $si1; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-1"<?php echo $sj1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-1"<?php echo $sk1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-1"<?php echo $sl1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-1"<?php echo $sm1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-1"<?php echo $sn1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-1"<?php echo $so1; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-1"<?php echo $sp1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-1"<?php echo $sq1; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-1"<?php echo $sr1; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-1"<?php echo $ss1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-1"<?php echo $st1; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-1"<?php echo $su1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-1"<?php echo $sv1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-1"<?php echo $sw1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-1"<?php echo $sx1; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-1"<?php echo $sy1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-1"<?php echo $sz1; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR1"<?php echo $saRR1; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-2"<?php echo $sa2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-2"<?php echo $sb2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-2"<?php echo $sc2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-2"<?php echo $sd2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-2"<?php echo $se2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-2"<?php echo $sf2; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-2"<?php echo $sg2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-2"<?php echo $sh2; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-2"<?php echo $si2; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-2"<?php echo $sj2; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-2"<?php echo $sk2; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-2"<?php echo $sl2; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-2"<?php echo $sm2; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-2"<?php echo $sn2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-2"<?php echo $so2; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-2"<?php echo $sp2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-2"<?php echo $sq2; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-2"<?php echo $sr2; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-2"<?php echo $ss2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-2"<?php echo $st2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-2"<?php echo $su2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-2"<?php echo $sv2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-2"<?php echo $sw2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-2"<?php echo $sx2; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-2"<?php echo $sy2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-2"<?php echo $sz2; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR2"<?php echo $saRR2; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-3"<?php echo $sa3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-3"<?php echo $sb3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-3"<?php echo $sc3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-3"<?php echo $sd3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-3"<?php echo $se3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-3"<?php echo $sf3; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-3"<?php echo $sg3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-3"<?php echo $sh3; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-3"<?php echo $si3; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-3"<?php echo $sj3; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-3"<?php echo $sk3; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-3"<?php echo $sl3; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-3"<?php echo $sm3; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-3"<?php echo $sn3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-3"<?php echo $so3; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-3"<?php echo $sp3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-3"<?php echo $sq3; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-3"<?php echo $sr3; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-3"<?php echo $ss3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-3"<?php echo $st3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-3"<?php echo $su3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-3"<?php echo $sv3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-3"<?php echo $sw3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-3"<?php echo $sx3; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-3"<?php echo $sy3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-3"<?php echo $sz3; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR3"<?php echo $saRR3; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-4"<?php echo $sa4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-4"<?php echo $sb4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-4"<?php echo $sc4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-4"<?php echo $sd4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-4"<?php echo $se4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-4"<?php echo $sf4; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-4"<?php echo $sg4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-4"<?php echo $sh4; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-4"<?php echo $si4; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-4"<?php echo $sj4; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-4"<?php echo $sk4; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-4"<?php echo $sl4; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-4"<?php echo $sm4; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-4"<?php echo $sn4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-4"<?php echo $so4; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-4"<?php echo $sp4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-4"<?php echo $sq4; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-4"<?php echo $sr4; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-4"<?php echo $ss4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-4"<?php echo $st4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-4"<?php echo $su4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-4"<?php echo $sv4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-4"<?php echo $sw4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-4"<?php echo $sx4; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-4"<?php echo $sy4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-4"<?php echo $sz4; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR4"<?php echo $saRR4; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-5"<?php echo $sa5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-5"<?php echo $sb5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-5"<?php echo $sc5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-5"<?php echo $sd5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-5"<?php echo $se5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-5"<?php echo $sf5; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-5"<?php echo $sg5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-5"<?php echo $sh5; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-5"<?php echo $si5; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-5"<?php echo $sj5; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-5"<?php echo $sk5; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-5"<?php echo $sl5; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-5"<?php echo $sm5; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-5"<?php echo $sn5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-5"<?php echo $so5; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-5"<?php echo $sp5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-5"<?php echo $sq5; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-5"<?php echo $sr5; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-5"<?php echo $ss5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-5"<?php echo $st5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-5"<?php echo $su5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-5"<?php echo $sv5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-5"<?php echo $sw5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-5"<?php echo $sx5; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-5"<?php echo $sy5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-5"<?php echo $sz5; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR5"<?php echo $saRR5; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-6"<?php echo $sa6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-6"<?php echo $sb6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-6"<?php echo $sc6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-6"<?php echo $sd6; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-6"<?php echo $se6; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-6"<?php echo $sf6; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-6"<?php echo $sg6; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-6"<?php echo $sh6; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-6"<?php echo $si6; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-6"<?php echo $sj6; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-6"<?php echo $sk6; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-6"<?php echo $sl6; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-6"<?php echo $sm6; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-6"<?php echo $sn6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-6"<?php echo $so6; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-6"<?php echo $sp6; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-6"<?php echo $sq6; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-6"<?php echo $sr6; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-6"<?php echo $ss6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-6"<?php echo $st6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-6"<?php echo $su6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-6"<?php echo $sv6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-6"<?php echo $sw6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-6"<?php echo $sx6; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-6"<?php echo $sy6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-6"<?php echo $sz6; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR6"<?php echo $saRR6; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-7"<?php echo $sa7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-7"<?php echo $sb7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-7"<?php echo $sc7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-7"<?php echo $sd7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-7"<?php echo $se7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-7"<?php echo $sf7; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-7"<?php echo $sg7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-7"<?php echo $sh7; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-7"<?php echo $si7; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-7"<?php echo $sj7; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-7"<?php echo $sk7; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-7"<?php echo $sl7; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-7"<?php echo $sm7; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-7"<?php echo $sn7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-7"<?php echo $so7; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-7"<?php echo $sp7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-7"<?php echo $sq7; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-7"<?php echo $sr7; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-7"<?php echo $ss7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-7"<?php echo $st7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-7"<?php echo $su7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-7"<?php echo $sv7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-7"<?php echo $sw7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-7"<?php echo $sx7; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-7"<?php echo $sy7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-7"<?php echo $sz7; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR7"<?php echo $saRR7; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-8"<?php echo $sa8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-8"<?php echo $sb8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-8"<?php echo $sc8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-8"<?php echo $sd8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-8"<?php echo $se8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-8"<?php echo $sf8; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-8"<?php echo $sg8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-8"<?php echo $sh8; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-8"<?php echo $si8; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-8"<?php echo $sj8; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-8"<?php echo $sk8; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-8"<?php echo $sl8; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-8"<?php echo $sm8; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-8"<?php echo $sn8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-8"<?php echo $so8; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-8"<?php echo $sp8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-8"<?php echo $sq8; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-8"<?php echo $sr8; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-8"<?php echo $ss8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-8"<?php echo $st8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-8"<?php echo $su8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-8"<?php echo $sv8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-8"<?php echo $sw8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-8"<?php echo $sx8; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-8"<?php echo $sy8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-8"<?php echo $sz8; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-RR8"<?php echo $saRR8; ?>><span class="checkmark"></span></label>
                </div>
               </div>
               <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-9"<?php echo $sa9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-9"<?php echo $sb9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-9"<?php echo $sc9; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-9"<?php echo $sd9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-9"<?php echo $se9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-9"<?php echo $sf9; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-9"<?php echo $sg9; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-9"<?php echo $sh9; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-9"<?php echo $si9; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-9"<?php echo $sj9; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-9"<?php echo $sk9; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-9"<?php echo $sl9; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-9"<?php echo $sm9; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-9"<?php echo $sn9; ?>><span class="checkmark"></span></label>
                
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                
                </div>
               </div>

<div class="row" style="border-top:0.5px black solid;">
                <div class="col-md-6 col-sm-6 col-lg-6">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-10"<?php echo $sa10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-10"<?php echo $sb10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-10"<?php echo $sc10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-10"<?php echo $sd10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-10"<?php echo $se10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-10"<?php echo $sf10; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-10"<?php echo $sg10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-10"<?php echo $sh10; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-10"<?php echo $si10; ?>><span class="checkmark"></span></label>
               
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-10"<?php echo $sj10; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-10"<?php echo $sk10; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-10"<?php echo $sl10; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-10"<?php echo $sm10; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-10"<?php echo $sn10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-10"<?php echo $so10; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-10"<?php echo $sp10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-10"<?php echo $sq10; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-10"<?php echo $sr10; ?>><span class="checkmark"></span></label>
               
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-10"<?php echo $ss10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-10"<?php echo $st10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-10"<?php echo $su10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-10"<?php echo $sv10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-10"<?php echo $sw10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-10"<?php echo $sx10; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-10"<?php echo $sy10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-10"<?php echo $sz10; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-RR3"<?php echo $sgRR3; ?>><span class="checkmark"></span></label>
                
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-11"<?php echo $sa11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-11"<?php echo $sb11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-11"<?php echo $sc11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-11"<?php echo $sd11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-11"<?php echo $se11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-11"<?php echo $sf11; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-11"<?php echo $sg11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-11"<?php echo $sh11; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-11"<?php echo $si11; ?>><span class="checkmark"></span></label>
                
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-11"<?php echo $sj11; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-11"<?php echo $sk11; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-11"<?php echo $sl11; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-11"<?php echo $sm11; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-11"<?php echo $sn11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-11"<?php echo $so11; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-11"<?php echo $sp11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-11"<?php echo $sq11; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-11"<?php echo $sr11; ?>><span class="checkmark"></span></label>
               
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-11"<?php echo $ss11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-11"<?php echo $st11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-11"<?php echo $su11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-11"<?php echo $sv11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-11"<?php echo $sw11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-11"<?php echo $sx11; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-11"<?php echo $sy11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-11"<?php echo $sz11; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-RR4"<?php echo $sgRR4; ?>><span class="checkmark"></span></label>
                
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-12"<?php echo $sa12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-12"<?php echo $sb12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-12"<?php echo $sc12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-12"<?php echo $sd12; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-12"<?php echo $se12; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-12"<?php echo $sf12; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-12"<?php echo $sg12; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-12"<?php echo $sh12; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-12"<?php echo $si12; ?>><span class="checkmark"></span></label>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-12"<?php echo $sj12; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-12"<?php echo $sk12; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-12"<?php echo $sl12; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-12"<?php echo $sm12; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-12"<?php echo $sn12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-12"<?php echo $so12; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-12"<?php echo $sp12; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-12"<?php echo $sq12; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-12"<?php echo $sr12; ?>><span class="checkmark"></span></label>
               
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-12"<?php echo $ss12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-12"<?php echo $st12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-12"<?php echo $su12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-12"<?php echo $sv12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-12"<?php echo $sw12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-12"<?php echo $sx12; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-12"<?php echo $sy12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-12"<?php echo $sz12; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-RR5"<?php echo $sgRR5; ?>><span class="checkmark"></span></label>

                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-13"<?php echo $sa13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-13"<?php echo $sb13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-13"<?php echo $sc13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-13"<?php echo $sd13; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-13"<?php echo $se13; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-13"<?php echo $sf13; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-13"<?php echo $sg13; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-13"<?php echo $sh13; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-13"<?php echo $si13; ?>><span class="checkmark"></span></label>
               
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-13"<?php echo $sj13; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-13"<?php echo $sk13; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-13"<?php echo $sl13; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-13"<?php echo $sm13; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-13"<?php echo $sn13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-13"<?php echo $so13; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-13"<?php echo $sp13; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-13"<?php echo $sq13; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-13"<?php echo $sr13; ?>><span class="checkmark"></span></label>
               
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-13"<?php echo $ss13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-13"<?php echo $st13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-13"<?php echo $su13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-13"<?php echo $sv13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-13"<?php echo $sw13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-x-13"<?php echo $sx13; ?>> <span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-y-13"<?php echo $sy13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-z-13"<?php echo $sz13; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-RR6"<?php echo $sgRR6; ?>><span class="checkmark"></span></label>

                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-a-14"<?php echo $sa14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-b-14"<?php echo $sb14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-c-14"<?php echo $sc14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-d-14"<?php echo $sd14; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-e-14"<?php echo $se14; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-f-14"<?php echo $sf14; ?>> <span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-g-14"<?php echo $sg14; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-h-14"<?php echo $sh14; ?>><span class="checkmark"></span></label>
                <label class="chck">   <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-i-14"<?php echo $si14; ?>><span class="checkmark"></span></label>
               
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-j-14"<?php echo $sj14; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-k-14"<?php echo $sk14; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-l-14"<?php echo $sl14; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-m-14"<?php echo $sm14; ?>><span class="checkmark"></span></label>
                <label class="chck"><input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-n-14"<?php echo $sn14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-o-14"<?php echo $so14; ?>> <span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-p-14"<?php echo $sp14; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-q-14"<?php echo $sq14; ?>><span class="checkmark"></span></label>
                <label class="chck">  <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-r-14"<?php echo $sr14; ?>><span class="checkmark"></span></label>
               
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-s-14"<?php echo $ss14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-t-14"<?php echo $st14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-u-14"<?php echo $su14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-v-14"<?php echo $sv14; ?>><span class="checkmark"></span></label>
                <label class="chck"> <input name="second[]" type="checkbox" class="input_class_checkbox1" autocomplete="off" value="s-w-14"<?php echo $sw14; ?>><span class="checkmark"></span></label>
                


                </div>
                </div>

               </div>
                <br>
                <div style="margin:0 auto; "><img src="images1/screen.jpg"/></div>
               <br>
               <br>
               
               <input  type="submit" value="Print" hidden/>
               <div></div>
               
  </div>
        </div>
        
        </div>
       