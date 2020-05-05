
           
           
            <?php
            
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
                            <h3>Delete Data</h3>
                        
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-10 col-md-10">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Delete</h4>
                                    </div>
                                </div>
                                <form action="" method="post">
                                    <div class="panel-body">
                                       
                                        
                                        <div class="input-group input-group-lg">
                                            This will delete all the booking data permanently.Do you want to delete?
                                        </div>
                                        
                                        </div>
                                <div class="row">
                                            <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary w-md m-b-5" name="delete">Delete</button>
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
    <?php
include("config.php");
include("config1.php");

if (isset($_POST["delete"]))
{
mysql_query("delete FROM rate");
mysql_query("delete FROM seat");
mysql_query("insert into rate values ('0','0','0','0','0')");
}
?>
    
     
</html>