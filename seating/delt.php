<?php 

include("config.php");
$tk=$_GET['d'];
$i=1;
$result=mysql_query("SELECT * FROM seat where bid=$tk");

if(mysql_fetch_array($result)){
    while($row=mysql_fetch_array($result))
    {
        $i=$i+1;
    
        $bid=$tk;
        $timing=$row['timing'];
        $date=$row['date'];
        $moviename=$row['moviename'];
        $class=$row['sno'];
        
        


    }
    $result2=mysql_query("INSERT into deltkt values('$bid','$moviename','$timing','$date','$i','$class')");
    ?>
    <form style='color:red; letter-spacing:4px; font-weight:100' action="index.php" method="POST" id="delform" name="delform">
<input type="text" name="tno" value="<?php echo $bid;?>" hidden/><br><br>
<input type="text" name="mname" value="<?php echo $moviename;?>" readonly/><br><br>
<input type="text" name="time" value="<?php echo $timing;?>" readonly/><br><br>
<input type="text" name="date"value="<?php echo $date;?>" readonly/><br><br>
<label style='color:black; letter-spacing:4px; font-weight:100'>Number of tickets..</label><br><br>
<input type="text" name="no"value="<?php echo $i;?>" readonly/><br><br>

</form>
<?php
    $bid=$tk;
$result1=mysql_query("DELETE FROM seat where bid=$bid");
$result4=mysql_query("DELETE FROM rate where bid=$bid");

if(mysql_query($result1)==true)
{
    echo "<b style='color:green; letter-spacing:4px; font-weight:100'>Deleted Successfully!!</b>";
  
}
else{
    echo "<b style='color:green; letter-spacing:4px; font-weight:100'>Deleted Successfully!!</b>";
  
}

}

else 
{
    $bid='---';
        $timing='---';
        $date='---';
        $moviename='---';
    echo "<b style='color:red; letter-spacing:4px; font-weight:100'>No such ticket</b>";
}

?>





