<?php
include 'header.php';
include 'config.php';
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
                            <h1>Movie</h1>
                            
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Movie</li>
                                <li class="active">View</li>
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
                                        <a href="adminadd.php"><button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-plus" aria-hidden="true"></i></button>&nbsp;<label>ADD MOVIE</label></a>
                                        <br>
                                        <br>
                                        <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter >
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                    <th>Movie Name</th>
                                                    <th>Shows</th>
                                                    <th>Layout </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$result=mysql_query("SELECT * FROM movie_tb ORDER BY id ASC");						   
$i=0;
while($row = mysql_fetch_array($result))
{
$i++;
echo $row['mname'];
?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                    <td ><?php echo $row['mname'];?></td>
                                                    <td><?php echo $row['shows'];?></td>
                                                    <td><?php if( $row['layout']=='layout1'){
                                                        echo '80.100.120';
                                                    }
                                                    else if($row['layout']=='layout2')
                                                        {
                                                            echo '100.120';
                                                        }
                                                        else
                                                            {
                                                                echo '150.200';
                                                            }?></td>
                                                
                                               
                                               
                                                <td>
                                                        <a href="adminedit.php?id=<?php echo $row['id'];?>"><button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                                        <a href="admindelete.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                                    </td>
                                                
</tr>
                                               
                                                <?php }?>
                                                
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
