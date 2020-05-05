<?php
include 'header.php';
include 'config.php';
include 'config1.php';
$dbh2 = mysql_connect("localhost","root","",true); 
$dbh1 = mysql_connect("localhost","root","",true);
mysql_select_db("abirami_db", $dbh2);
mysql_select_db("sample_db", $dbh1);
?>
<style>
@media print {
 #table{
    font-size:40px !important;
 }
 #example1{
    height:1000px;
    width:200px;
 }
}

</style>
 <link href="assets/plugins/footable-bootstrap/css/footable.core.min.css" rel="stylesheet" type="text/css"/>
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-box1"></i>
                        </div>
                        <div class="header-title">
                            <h1>Day Report</h1>
                            
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Movie</li>
                                <li class="active">Report</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Choose a date...</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                        <input type="date" id="filter" class="form-control" placeholder="Search in table" onchange="showr(this.value);" placeholder="Choose a date...">
                                       <div id="table" name="table" style="height:50px;"></div>
                                        
                                    <br><br>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
       
        <script>
        function  showr(str) {
  
 
  
  if (str == "") {
      document.getElementById("table").innerHTML = "";
      return;
  } else { 
      if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
      } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById("table").innerHTML = xmlhttp.responseText;
          }
      }
      xmlhttp.open("GET","dreport.php?d="+str,true);
      xmlhttp.send();
     
      
  }
  $('#nos').css("display","block");
}
        </script>
        <!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
        <script src="assets/plugins/animsition/js/animsition.min.js"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- STRAT PAGE LABEL PLUGINS -->
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/plugins/footable-bootstrap/js/footable.all.min.js"></script>
        <script src="assets/plugins/footable-bootstrap/js/footable-active.js"></script>
        <script src="assets/dist/js/app.min.js"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#example1')[0], {
                onrendered: function (canvas) {
                    var ctx = canvas.getContext("2d");
                    
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 550,
                            height:80
                            
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        });
    </script>
    </body>

<!-- Mirrored from thememinister.com/adminpage-v-2.1/theme/adminpage_v2.2/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 16:48:00 GMT -->
</html>
