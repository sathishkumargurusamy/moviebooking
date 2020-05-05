<?php
include 'header.php';
include 'config1.php';
error_reporting(0);

?>
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
                            <h1>Deleted Ticket</h1>
                            
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Movie</li>
                                <li class="active">Deleted Ticket</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Movie </h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                            
                                        <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter >
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>Number of Tickets</th>
                                                    <th>Movie Name</th>
                                                    <th>Time</th>
                                                    <th>Date</th>
                                                    <th>Class</th>
                                                    <th>Per Ticket(Rs)</th>
                                                    <th>Total</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$result=mysql_query("SELECT * FROM deltkt");
$i=0;						   
while($row = mysql_fetch_array($result))
{
    $i=$i+1;
?>
                                                <tr>
                                                <td><?php echo $row['bid']; ?></td>
                                                <td ><?php echo $row['no'];?></td>
                                                    <td ><?php echo $row['mname'];?></td>
                                                    <td><?php echo $row['timing'];?></td>
                                                    <td><?php echo $row['date'];?></td>
                                                   <?php $sno=$row['no'];
        $sno1=explode("-",$row['class']);
        echo $sno1[0];
        include 'config.php';
        $result1=mysql_query("SELECT layout FROM movie_tb where `mname`='".$row['mname']."'");
          $row1=mysql_fetch_array($result1);
        if($sno1[0]=='f')
        {
          
          $class="FIRST CLASS";
          
          if($row1[0]=='layout1')
{
    $rate="100";

}elseif($row1[0]=='layout2')
{
    $rate="100";
}
else{
    $rate="150"; 
}
        }
        elseif($sno1[0]=='s')
        {
          
          
          
          if($row1[0]=='layout1')
{
    $class="SECOND CLASS";
    $rate="80";

}elseif($row1[0]=='layout2')
{
    $class="FIRST CLASS";
    
    $rate="100";
}
else{
    $class="FIRST CLASS";
    $rate="150"; 
}
        }
        else{
          
          $class="BOX";
          
          if($row1[0]=='layout1')
{
    $rate="120";

}elseif($row1[0]=='layout2')
{
    $rate="120";
}
else{
    $rate="200"; 
}
        }
        }
        




          ?>
          <td><?php echo $class;?></td>
          <td><?php echo $rate;?></td>
          <?php $total=$sno*$rate;?>
          <td><?php echo $total;?></td>
                                                    
                                               
                                               
                                               
                                                
</tr>
                                               
                                    
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="6">
                                                        <ul class="pagination pull-right"></ul>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <button type="button" class="btn btn-labeled btn-inverse m-b-5" id="btnExport">
                                        <span class="btn-label"><i class="glyphicon glyphicon-save-file"></i></span>PDF
                                </div>
                                
                            </div>
                        </div>
                    </div>
       
        
        <!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
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
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
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
