<?php 
include("config1.php"); 
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
       
		
		<!-- Maniac stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/animate/animate.min.css" />
        <link rel="stylesheet" href="css/bootstrapValidator/bootstrapValidator.min.css" />
        <link rel="stylesheet" href="css/style.css" />
		
	
	</head>
	<body class="fixed">
 <div>
<?php $q = $_GET['q'];
?>
		 
		<!-- wrapper -->

 

       
    <?php
    include("config1.php");
     $status=mysql_query("SELECT shows from movie_tb WHERE mname = '$q'");
     $i=0;
	  while($sta=mysql_fetch_array($status))
	  { 
        $show1=explode(",",$sta['shows']);
          foreach($show1 as $a)
          {
        
          ?>
   
  
  <input type="text" name="shows1"  id="shows1" autocomplete="off"  style="  border-top: 0;
     border-right: 0;
     border-left: 0;
     border-bottom: 0;
color:black;
     -webkit-box-shadow: none;
     box-shadow: none; margin:3px;padding:5px; height:50px;width:70px;cursor: pointer; font-family: 'Anton', sans-serif;background:url('images1/2.png'); background-size: 100% 100%;
 
  background-repeat: no-repeat;" value="<?php echo $a; ?>"  onclick="showlayout(this.value); " readonly/>
<?php   $i=$i+1;}} ?>

				  
                                  
               </div>                  
                            </div>
                   
                </div>
            </div>
        </div><!-- /.wrapper -->
		</div>
		
        <!-- Javascript -->
        <script src="js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
		
		<!-- Bootstrap -->
        <script src="js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
		
		<!-- Interface -->
        <script src="js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="js/plugins/pace/pace.min.js" type="text/javascript"></script>
		
		<!-- Forms -->
        <script src="js/plugins/bootstrapValidator/bootstrapValidator.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
		
		
    </body>
</html>