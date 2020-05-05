
            <?php
            include 'config.php';
if(isset($_POST['btnupdate']))
{
    $id=$_POST['id'];
    $mname=$_POST['mname'];
    $shows_string = implode(', ', $_POST['shows']);
    $lout=$_POST['layout'];
$query="update movie_tb set mname='$mname',shows='$shows_string',layout='$lout',date1=now() where id='$id'";
$result=mysql_query($query);
header('Location:adminview.php');
}

            include 'header.php';
?> 
        
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon"><i class="pe-7s-note2"></i></div>
                        <div class="header-title">
                            <h1>Edit Movie</h1>
                            
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
                                <li class="active">Edit Movie</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-10 col-md-10">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Edit Movie</h4>
                                    </div>
                                </div>
                                <form action="" method="post">
                                    <div class="panel-body">
                                       <?php
                                       $qid=$_GET['id'];
                                       $query="SELECT * FROM movie_tb where id='$qid'";
                                       $result=mysql_query($query);
                                       $row = mysql_fetch_array($result);
                                       
                                       
                                       ?>
                                        <label>Name</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon" id="sizing-addon1">MOVIE</span>
                                            <input type="hidden" name="id" id="textfield1"  value="<?php echo $row['id']; ?>" class="form-control">
                                            <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="mname" value=<?php echo $row['mname'];?>>
                                        </div>
                                        
                                        </div>
                                        <div class="panel-body" >
                                        <label>Number of shows</label>
                                        <div class="form-group row" >
                                            
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <select class="form-control basic-multiple" multiple="multiple" name="shows[]">
                                                    <optgroup label="Special Show">
                                                        <option value="6 AM" <?php  $sno1=explode(",",$row['shows']); foreach($sno1 as $i){if($i=="6 AM") echo 'selected="selected"';}?>>6 AM</option>
                                                       
                                                    </optgroup>
                                                    <optgroup label="Morning Show">
                                                    <option value="10 AM" <?php $sno2=explode(",",$row['shows']); foreach($sno2 as $j){if($j=="10 AM"||$j==" 10 AM") echo 'selected="selected"';}?>>10 AM</option>
                                                       
                                                    </optgroup>
                                                    <optgroup label="Matinee Show">
                                                    <option value="1:50 PM" <?php $sno3=explode(",",$row['shows']); foreach($sno3 as $k){if($k==" 1:50 PM"||$k=="1:50 PM") echo 'selected="selected"';}?>>1:50 PM</option>
                                                       
                                                    </optgroup>
                                                    <optgroup label="Evening Show/Night show">
                                                    <option value="6 PM" <?php $sno4=explode(",",$row['shows']); foreach($sno4 as $l){if($l==" 6 PM"||$l=="6 PM") echo 'selected="selected"';}?>>6 PM</option>
                                                    <option value="9:50 PM" <?php $sno5=explode(",",$row['shows']); 
                                                    foreach($sno5 as $m){
                                                        if( $m==" 9:50 PM"||$m=="9:50 PM")
                                                             echo 'selected="selected"';
                                                            
                                                             }?>>9:50 PM</option>
                                                    </optgroup>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="panel-body">
                                        <label>Select Layout</label>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                                
                                        <div >
                                                <input 
                                                type="radio" 
                                                id="sad" class="input-hidden" name="layout" value="layout1" <?php if($row['layout']=='layout1'){echo 'checked';}?> />
                                              <label for="sad">
                                                <img 
                                                  src="assets/socicon/seat1.png" 
                                                  alt="I'm sad" />
                                              </label>
                                              
                                              <input 
                                                type="radio" 
                                                id="happy" class="input-hidden"  name="layout" value="layout2"  <?php if($row['layout']=='layout2'){echo 'checked';}?>/>
                                              <label for="happy">
                                                <img 
                                                  src="assets/socicon/seat2.png" 
                                                  alt="I'm happy" />
                                              </label>
                                              <input 
                                                type="radio" 
                                                id="happy1" class="input-hidden"  name="layout" value="layout3"  <?php if($row['layout']=='layout3'){echo 'checked';}?>/>
                                              <label for="happy1">
                                                <img 
                                                  src="assets/socicon/seat3.png" 
                                                  alt="I'm happy" />
                                              </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary w-md m-b-5"  name="btnupdate">Update</button>
                                                
                                                <button type="button" class="btn btn-default w-md m-b-5">Cancel</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->   
    </body>
</html>